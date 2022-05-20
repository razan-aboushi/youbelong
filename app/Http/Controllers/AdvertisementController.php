<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $advertisements = Advertisement::query();

        if ($request->has('advertiser') && !is_null($request->advertiser)) {
            $advertisements->where('advertiser', 'like', '%' . $request->advertiser . '%');
        }

        if ($request->has('status') && !is_null($request->status)) {
            $advertisements->where('status', $request->status);
        }

        if ($request->has('from_date') && !is_null($request->from_date)) {
            $advertisements->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->has('to_date') && !is_null($request->to_date)) {
            $advertisements->whereDate('created_at', '<=', $request->to_date);
        }

        $advertisements = $advertisements->latest()->get();

        return view('users.advertisements.index', compact('advertisements', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.advertisements.create');
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
            'advertiser' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'price' => ['required', 'numeric'],
            'banner' => ['required', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('banner')->storeAs('public/ads', $fileNameToStore);
            $validated['banner'] = $fileNameToStore;
        }

        Advertisement::create($validated);
        return redirect()->route('advertisements.index')->with('message', 'The advertisement has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertisement = Advertisement::findOrFail($id);

        return view('users.advertisements.edit', compact('advertisement'));
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
        $advertisement = Advertisement::findOrFail($id);

        $validated = $this->validate($request, [
            'advertiser' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'price' => ['required', 'numeric'],
            'banner' => ['nullable', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('banner')->storeAs('public/ads', $fileNameToStore);
            $validated['banner'] = $fileNameToStore;
        }

        $advertisement->advertiser = $validated['advertiser'];
        $advertisement->url = $validated['url'];
        $advertisement->start_date = $validated['start_date'];
        $advertisement->end_date = $validated['end_date'];
        $advertisement->price = $validated['price'];
        $advertisement->status = $validated['status'];
        $advertisement->save();
        return redirect()->route('advertisements.index')->with('message', 'The advertisement has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->delete();

        return redirect()->route('advertisements.index')->with('message', 'The advertisement has been deleted successfully!');
    }
}
