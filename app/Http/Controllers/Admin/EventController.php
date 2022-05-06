<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(15);

        return view('admin.event.index', [
            'events' => $events,
        ]);
    }

    public function store(EventRequest $request)
    {
        $file = $request->file('image')->store('events');

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'value' => $request->value,
            'image' => $file,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'expires' => $request->expires,
            'amount' => $request->amount,
        ]);

        return response()->redirectToRoute('admin.event.index');
    }
}
