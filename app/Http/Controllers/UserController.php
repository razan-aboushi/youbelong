<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        $contacts = Contact::latest()->paginate();

        return view('users.contact-us', compact('contacts'));
    }
}
