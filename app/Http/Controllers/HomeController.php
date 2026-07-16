<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::with(['organization', 'category'])
            ->latest()
            ->take(6)
            ->get();
            
        return view('home.index ', compact('events'));
    }
}
