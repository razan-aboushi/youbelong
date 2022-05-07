<?php

namespace App\Http\Controllers;

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
            return view('users.admin-dashboard');
        } else {
            return view('users.user-dashboard');
        }
    }

    public function contactUs(Request $request)
    {
        if (auth()->user()->can('is-admin')) {
            $contacts = new Contact;
        } else {
            $contacts = CareHomeContact::where('user_id', auth()->user()->id);
        }

        $contacts = $contacts->latest()->simplePaginate();

        return view('users.contact-us', compact('contacts'));
    }

    public function users(Request $request)
    {
        $users = User::whereHas('role', function ($r) {
            $r->where('name', '!=', 'admin');
        })->with(['role'])->latest()->simplePaginate();

        return view('users.users', compact('users'));
    }

    public function profileInformation()
    {
        $user = User::with(['careHome', 'role'])->findOrFail(auth()->user()->id);

        return view('users.profile-information', compact('user'));
    }

    public function storeProfileInformation(Request $request)
    {
        $user = User::with(['careHome', 'role'])->findOrFail(auth()->user()->id);

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
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        if ($request->password) {
            $user->password = $request->password;
        }
        if ($request->hasFile('profile')) {
            $extension = $request->file('profile')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('profile')->storeAs('public/profiles', $fileNameToStore);
            $user->profile = $fileNameToStore;
        }
        $user->sector = $request->sector;
        $user->save();

        $careHome = $user->careHome;
        if ($careHome) {
            $careHome->elderlies_number = $request->elderlies_number;
            $careHome->establishment_date = $request->establishment_date;
            $careHome->bio = $request->bio;
            $careHome->short_description = $request->short_description;
            $careHome->save();
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
}
