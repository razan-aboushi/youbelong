<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->simplePaginate();

        return view('users.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string', 'max:10000'],
            'cover_image' => ['required', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('cover_image')) {
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('cover_image')->storeAs('public/uploads', $fileNameToStore);
            $validated['cover_image'] = $fileNameToStore;
        }

        Article::create($validated);
        return redirect()->route('articles.index')->with('message', 'The articles has been updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('users.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string', 'max:10000'],
            'cover_image' => ['nullable', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('cover_image')) {
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('cover_image')->storeAs('public/uploads', $fileNameToStore);
            $article->cover_image = $fileNameToStore;
        }

        $article->title = $validated['title'];
        $article->short_description = $validated['short_description'];
        $article->content = $validated['content'];
        $article->status = $validated['status'];
        $article->save();
        return redirect()->route('articles.index')->with('message', 'The articles has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('message', 'The articles has been deleted successfully!');
    }
}
