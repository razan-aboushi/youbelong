<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CMSController extends Controller
{
    public function articles()
    {
        $articles = Article::latest()->simplePaginate();

        return view('users.articles', compact('articles'));
    }

    public function storeArticles()
    {

    }

    public function updateArticles(Request $request)
    {

    }

    public function deleteArticles()
    {

    }

}
