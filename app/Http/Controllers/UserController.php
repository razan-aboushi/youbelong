<?php

namespace App\Http\Controllers;

use App\Helpers\CsvExport;
use App\Models\Article;
use App\Models\CareHomeContact;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->can('is-admin')) {

            $number_of_users = User::whereHas('role', function ($r) {
                $r->where('name', '!=', 'admin');
            })->count();

            $number_of_articles = Article::count();

            $number_of_contact_us = Contact::count();

            return view('users.admin-dashboard', compact('number_of_users', 'number_of_articles', 'number_of_contact_us'));
        } else {
            return view('users.user-dashboard');
        }
    }

    public function contactUs(Request $request)
    {
        if (auth()->user()->can('is-admin')) {
            $contacts = Contact::query();
        } else {
            $contacts = CareHomeContact::where('user_id', auth()->user()->id);
        }

        if ($request->has('subject') && !is_null($request->subject)) {
            $contacts->where('subject', $request->subject);
        }

        if ($request->has('name') && !is_null($request->name)) {
            $contacts->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('phone') && !is_null($request->phone)) {
            $contacts->where('phone', 'like', '%' . $request->phone . '%');
        }

        if ($request->has('email') && !is_null($request->email)) {
            $contacts->where('email', 'like', '%' . $request->email . '%');
        }

        $contacts = $contacts->latest()->simplePaginate();

        return view('users.contact-us', compact('contacts', 'request'));
    }

    public function users(Request $request, $export = 0)
    {
        $users = User::whereHas('role', function ($r) {
            $r->where('name', '!=', 'admin');
        });

        if ($request->has('name') && !is_null($request->name)) {
            $users->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('email') && !is_null($request->email)) {
            $users->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->has('phone') && !is_null($request->phone)) {
            $users->where('phone', 'like', '%' . $request->phone . '%');
        }

        if ($request->has('approved') && !is_null($request->approved)) {
            $users->where('approved', $request->approved);
        }

        if ($export) {
            return $users;
        }

        $users = $users->with(['role'])->latest()->simplePaginate();

        return view('users.users', compact('users', 'request'));
    }

    public function profileInformation()
    {
        $user = User::with(['userCarehome', 'userIndividual', 'userCompany', 'role'])->findOrFail(auth()->user()->id);

        return view('users.profile-information', compact('user'));
    }

    public function storeProfileInformation(Request $request)
    {
        $user = User::with(['userCarehome', 'userIndividual', 'userCompany', 'role'])->findOrFail(auth()->user()->id);

        $role = $user->role->name;

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'avatar' => ['nullable', 'mimes:jpg,jpeg,bmp,png,gif'],
        ];

        if ($role == 'individual') {
            $rules += [
                'gender' => ['required', 'in:male,female', 'max:255'],
                'birthdate' => ['required', 'date', 'max:255', 'before:' . Carbon::now()->subYears(18)],
            ];
        }

        if ($role == 'company') {
            $rules += [
                'sector' => ['required', 'in:public,private', 'max:255'],
            ];
        }

        if ($role == 'carehome') {
            $rules += [
                'elderlies_number' => ['required', 'string', 'max:255'],
                'establishment_date' => ['required', 'string', 'date', 'max:255'],
                'bio' => ['required', 'string', 'max:10000'],
                'short_description' => ['required', 'string', 'max:500'],
            ];
        }

        $this->validate($request, $rules);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->password) {
            $user->password = $request->password;
        }
        if ($request->hasFile('profile')) {
            $extension = $request->file('profile')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('profile')->storeAs('public/profiles', $fileNameToStore);
            $user->profile = $fileNameToStore;
        }
        $user->save();

        $userCarehome = $user->userCarehome;
        if ($userCarehome) {
            $userCarehome->elderlies_number = $request->elderlies_number;
            $userCarehome->establishment_date = $request->establishment_date;
            $userCarehome->bio = $request->bio;
            $userCarehome->short_description = $request->short_description;
            $userCarehome->save();
        }

        $userCompany = $user->userCompany;
        if ($userCompany) {
            $userCompany->sector = $request->sector;
            $userCompany->save();
        }

        $userIndividual = $user->userIndividual;
        if ($userIndividual) {
            $userIndividual->gender = $request->gender;
            $userIndividual->birthdate = $request->birthdate;
            $userIndividual->save();
        }

        return back()->with('message', 'The profile information has been updated successfully!');
    }

    public function profileStatus($userId)
    {
        $user = User::findOrFail($userId);
        $user->approved = !$user->approved;
        $user->save();

        return back()->with('message', 'The user has been updated successfully!');
    }

    public function export(Request $request)
    {
        $users = $this->users($request, 1)->with(['role'])->get();

        $array_data = [];
        $loop = 0;
        foreach ($users as $user) {
            $array_data[$loop] = [
                'ID' => ++$loop,
                'Name' => $user->name,
                'Email' => $user->email,
                'Phone' => $user->phone,
                'Address' => $user->address,
                'Role' => $user->role->name,
                'Status' => $user->approved ? 'Active' : 'Inactive',
                'Reg. Date' => $user->created_at,
            ];
        }

        CsvExport::put($array_data);
        return redirect()->back();
    }
}
