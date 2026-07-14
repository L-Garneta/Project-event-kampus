<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with(['organization', 'category'])
            ->latest()
            ->paginate(9);

        return view('events.index', compact('events'));
    }
}
