<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::whereUserId(Auth::user()->id)
            ->paginate(15);

        return view('admin.event.index', [
            'events' => $events,
        ]);
    }

    public function store(EventRequest $request)
    {
        $file = $request->file('image')->store('events');

        $ticket = $request->get('ticket');

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'expires' => $request->expires,
        ]);

        foreach ($ticket["'description'"] as $key => $value)
        {
            Ticket::create([
                'description' => $ticket["'description'"][$key],
                'amount' => $ticket["'amount'"][$key],
                'value' => $ticket["'value'"][$key],
                'event_id' => $event->id,
            ]);
        }

        return response()->redirectToRoute('admin.event.index');
    }

    public function edit($id)
    {
        $event = Event::find($id);

       return view('admin.event.edit', [
           'event' => $event,
       ]);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if ($event->image !== $request->get('image') && !is_null($request->get('image')))
        {
            $file = $request->file('image')->store('events');
        }

        $event->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => !empty($file) ? $file : $event->image,
            'address' => $request->get('address'),
        ]);

        return response()->redirectToRoute('admin.event.index');
    }
}
