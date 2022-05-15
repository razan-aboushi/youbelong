<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\UserCarehome;
use App\Models\UserCompany;
use App\Models\UserIndividual;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm($role = null)
    {
        if (empty($role)) {
            $role = 'individual';
        }

        return view('auth.register', compact('role'));
    }

    protected function validator(array $data)
    {
        # for security reasons, ignore admin
        $available_roles = Role::where('name', '!=', 'admin')->pluck('name')->toArray();
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'in:' . implode(',', $available_roles)],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric','digits_between:10,14'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if ($data && array_key_exists('role', $data)) {
            if ($data['role'] == 'individual') {
                $rules += [
                    'gender' => ['required', 'in:male,female', 'max:255'],
                    'birthdate' => ['required', 'date', 'max:255', 'before:' . Carbon::now()->subYears(18)],
                ];
            }

            if ($data['role'] == 'company') {
                $rules += [
                    'sector' => ['required', 'in:public,private', 'max:255'],
                ];
            }

            if ($data['role'] == 'carehome') {
                $rules += [
                    'elderlies_number' => ['required', 'string', 'max:255'],
                    'establishment_date' => ['required', 'string', 'date', 'max:255'],
                ];
            }
        }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        $userObj = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role_id' => Role::where('name', $data['role'])->first()->id,
            'approved' => $data['role'] != 'carehome',
        ]);

        # for homecares
        if ($data['role'] == 'carehome') {
            UserCarehome::create([
                'user_id' => $userObj->id,
                'elderlies_number' => $data['elderlies_number'],
                'establishment_date' => $data['establishment_date'],
            ]);
        }

        if ($data['role'] == 'individual') {
            UserIndividual::create([
                'user_id' => $userObj->id,
                'birthdate' => $data['birthdate'],
                'gender' => $data['gender'],
            ]);
        }

        if ($data['role'] == 'company') {
            UserCompany::create([
                'user_id' => $userObj->id,
                'sector' => $data['sector'],
            ]);
        }

        return $userObj;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        $message = 'Please login to your account';
        if ($user->role->name == 'carehome') {
            $message = 'Your account is under revew by admin!';
        }

        return $request->wantsJson()
        ? new JsonResponse([], 201)
        : redirect()->route('login')->with('message', $message);
    }
}
