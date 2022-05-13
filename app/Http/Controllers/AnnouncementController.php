<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $announcements = Announcement::query();

        if ($request->has('title') && !is_null($request->title)) {
            $announcements->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->has('status') && !is_null($request->status)) {
            $announcements->where('status', $request->status);
        }

        $announcements = $announcements->latest()->simplePaginate();

        return view('users.announcements.index', compact('announcements', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.announcements.create');
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

        $validated['user_id'] = auth()->user()->id;

        Announcement::create($validated);
        return redirect()->route('announcements.index')->with('message', 'The announcement has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);

        abort_if($announcement->user_id != auth()->user()->id, 403);

        return view('users.announcements.edit', compact('announcement'));
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
        $announcement = Announcement::findOrFail($id);

        abort_if($announcement->user_id != auth()->user()->id, 403);

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
            $announcement->cover_image = $fileNameToStore;
        }

        $announcement->title = $validated['title'];
        $announcement->short_description = $validated['short_description'];
        $announcement->content = $validated['content'];
        $announcement->status = $validated['status'];
        $announcement->save();
        return redirect()->route('announcements.index')->with('message', 'The announcement has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);

        abort_if($announcement->user_id != auth()->user()->id, 403);

        $announcement->delete();

        return redirect()->route('announcements.index')->with('message', 'The announcement has been deleted successfully!');
    }
}
