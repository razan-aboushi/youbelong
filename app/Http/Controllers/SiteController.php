<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function storeContactUs(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:5000',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you!');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function articles($id = null)
    {
        if ($id) {
            return view('article-details');
        }

        return view('articles');
    }

    public function careHomes($id = null)
    {
        if ($id) {
            return view('carehome-details');
        }

        return view('carehomes');
    }

    public function careHomeEvents($id = null)
    {
        if ($id) {
            return view('carehome-event-details');
        }

        return view('carehome-events');
    }
}
