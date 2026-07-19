<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Category;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::with(['organization', 'category']);

        // Pencarian berdasarkan judul
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $events = $query->latest()->paginate(9);

        $categories = Category::all();

        return view('events.index', compact('events', 'categories'));
    }
    public function show(Event $event)
    {
        $event->load(['organization', 'category']);

        return view('events.show', compact('event'));
    }
}
