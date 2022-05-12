<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\UserEvent;

class UserEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($event_id)
    {
        $reservations = UserEvent::whereHas('event', function ($e) {
            $e->where('user_id', auth()->user()->id);
        })->where('event_id', $event_id)
            ->with('user')
            ->latest()
            ->simplePaginate();

        return view('users.events.reservations', compact('reservations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserEvent  $userEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = UserEvent::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('message', 'The reservation has been deleted successfully!');
    }

    public function reserveEventSeat($event_id)
    {
        $event = Event::findOrFail($event_id);

        $user_event = UserEvent::where('user_id', auth()->user()->id)->where('event_id', $event_id)->first();
        if ($user_event) {
            $user_event->delete();

            return back()->with('message', 'Reservation is canceled!');
        } else {
            UserEvent::create([
                'user_id' => auth()->user()->id,
                'event_id' => $event_id,
            ]);

            return back()->with('message', 'Reserved successfully!');
        }
    }
}
