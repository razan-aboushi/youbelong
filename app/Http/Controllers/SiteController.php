<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function aboutUs()
    {
        return view('site.about-us');
    }

    public function contactUs()
    {
        return view('site.contact-us');
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
        return view('site.privacy-policy');
    }

    public function articles($id = null)
    {
        if ($id) {
            return view('site.article-details');
        }

        return view('site.articles');
    }

    public function careHomes($id = null)
    {
        if (!empty($id)) {
            return view('site.carehome-details');
        }

        return view('site.carehomes');
    }

    public function careHomeEvents($id = null)
    {
        if (!empty($id)) {
            return view('site.carehome-event-details');
        }

        return view('site.carehome-events');
    }
}
