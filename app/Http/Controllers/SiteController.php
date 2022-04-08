<?php

namespace App\Http\Controllers;

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

    public function feedback()
    {
        return view('feedback');
    }
    
    public function termsAndConditions()
    {
        return view('terms-and-conditions');
    }
    
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
}
