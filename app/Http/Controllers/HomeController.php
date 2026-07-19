<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::with(['organization', 'category'])
            ->latest()
            ->take(6)
            ->get();

        $categories = Category::all();
        return view('home.index', compact(
            'events',
            'categories'
        ));
    }
}
