<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.dashboard');
    }

    public function contactUs(Request $request)
    {
        $contacts = Contact::latest()->simplePaginate();

        return view('users.contact-us', compact('contacts'));
    }

    public function users(Request $request)
    {
        $users = User::whereHas('role', function ($r) {
            $r->where('name', '!=', 'admin');
        })->with(['role'])->latest()->simplePaginate();

        return view('users.users', compact('users'));
    }
}
