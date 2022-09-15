<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(): Factory|View|Application
    {
        $events = Event::whereUserId(Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(15);

        return view('admin.event.index', [
            'events' => $events,
        ]);
    }

    public function show($id): Factory|View|Application
    {
        $event = Event::with('tickets')->find($id);

        return view('admin.event.show', [
            'event' => $event,
            'tickets' => $event->tickets
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        $event = Event::with('tickets')->find($id);

        return view('admin.event.edit', [
            'event' => $event,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $event = Event::find($id);

        if ($request->has('image')) {
            $file = $request->file('image')?->store('events');
        }

        if ($request->has('ticket')) {
            $event->tickets()->delete();
            $ticket = $request->get('ticket');

            foreach ($ticket["'description'"] as $key => $value) {
                Ticket::create([
                    'description' => $ticket["'description'"][$key],
                    'amount' => $ticket["'amount'"][$key],
                    'value' => $ticket["'value'"][$key],
                    'event_id' => $event->id,
                ]);
            }
        }

        $event->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $file ?? $event->image,
            'address' => $request->get('address'),
        ]);

        return response()->redirectToRoute('admin.event.index');
    }

    public function store(EventRequest $request): RedirectResponse
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

        foreach ($ticket["'description'"] as $key => $value) {
            Ticket::create([
                'description' => $ticket["'description'"][$key],
                'amount' => $ticket["'amount'"][$key],
                'value' => $ticket["'value'"][$key],
                'event_id' => $event->id,
            ]);
        }

        return response()->redirectToRoute('admin.event.index');
    }

    public function create(): Factory|View|Application
    {
        return view('admin.event.create');
    }
}
