<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Article;
use App\Models\CareHomeContact;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $latest_articles = Article::where('status', '1')->limit(5)->latest()->get();

        return view('site.home', compact('latest_articles'));
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
        $articles = Article::where('status', '1');

        if ($id) {
            $article = $articles->findOrFail($id);
            return view('site.article-details', compact('article'));
        }

        $articles = $articles->latest()->simplePaginate();

        return view('site.articles', compact('articles'));
    }

    public function careHomes($id = null)
    {
        $careHomes = User::whereHas('role', function ($r) {
            $r->where('name', 'carehome');
        })->where('approved', '1')->with('userCarehome');

        if (!empty($id)) {
            $careHome = $careHomes->findOrFail($id);

            return view('site.carehome-details', compact('careHome'));
        }

        $careHomes = $careHomes->latest()->simplePaginate();

        return view('site.carehomes', compact('careHomes'));
    }

    public function storeCarehomeContactUs(Request $request, $id)
    {
        $validated = $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:5000',
        ]);

        $validated['user_id'] = $id;

        CareHomeContact::create($validated);

        return back()->with('success', 'Thank you, we will contat you shortly!');
    }

    public function announcements($id = null)
    {
        $announcements = Announcement::where('status', '1')->with('user');

        if (!empty($id)) {
            $announcment = $announcements->findOrFail($id);

            return view('site.announcement-details', compact('announcment'));
        }

        $announcements = $announcements->latest()->simplePaginate();

        return view('site.announcements', compact('announcements'));
    }

    public function careHomeEvents($id = null)
    {
        if (!empty($id)) {
            return view('site.carehome-event-details');
        }

        return view('site.carehome-events');
    }
}
