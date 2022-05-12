<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::query()->where('user_id', auth()->user()->id);

        if ($request->has('title') && !is_null($request->title)) {
            $events->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->has('status') && !is_null($request->status)) {
            $events->where('status', $request->status);
        }

        $events = $events->withCount('users')->latest()->simplePaginate();

        return view('users.events.index', compact('events', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.events.create');
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
            'date' => ['required', 'date'],
            'from_time' => 'date_format:H:i',
            'to_time' => 'date_format:H:i|after:from_time',
            'location' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string', 'max:10000'],
            'cover_image' => ['required', 'mimes:jpg,jpeg,bmp,png,gif'],
            'attendees' => ['required', 'integer', 'gt:0'],
        ]);

        if ($request->hasFile('cover_image')) {
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('cover_image')->storeAs('public/uploads', $fileNameToStore);
            $validated['cover_image'] = $fileNameToStore;
        }

        $validated['user_id'] = auth()->user()->id;

        Event::create($validated);
        return redirect()->route('events.index')->with('message', 'The event has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        abort_if($event->user_id != auth()->user()->id, 403);

        return view('users.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        abort_if($event->user_id != auth()->user()->id, 403);

        $validated = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'from_time' => 'date_format:H:i',
            'to_time' => 'date_format:H:i|after:from_time',
            'location' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string', 'max:10000'],
            'cover_image' => ['nullable', 'mimes:jpg,jpeg,bmp,png,gif'],
            'attendees' => ['required', 'integer', 'gt:0'],
        ]);

        if ($request->hasFile('cover_image')) {
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('cover_image')->storeAs('public/uploads', $fileNameToStore);
            $event->cover_image = $fileNameToStore;
        }

        $event->title = $validated['title'];
        $event->date = $validated['date'];
        $event->from_time = $validated['from_time'];
        $event->to_time = $validated['to_time'];
        $event->location = $validated['location'];
        $event->short_description = $validated['short_description'];
        $event->content = $validated['content'];
        $event->attendees = $validated['attendees'];
        $event->save();
        return redirect()->route('events.index')->with('message', 'The event has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('message', 'The event has been deleted successfully!');
    }
}
