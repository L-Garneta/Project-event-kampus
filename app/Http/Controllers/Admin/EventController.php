<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with([
            'category',
            'organization'
        ])->latest()->paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::orderBy('nama_kategori')->get();

        $organizations = Organization::orderBy('nama_organisasi')->get();

        return view(
            'admin.events.create',
            compact(
                'categories',
                'organizations'
            )
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'tema' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'organization_id' => 'required|exists:organizations,id',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'lokasi' => 'required|max:255',
            'kuota' => 'required|integer|min:1',
            'status' => 'required|in:Gratis,Berbayar',
            'deskripsi' => 'required',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('poster')) {

            $validated['poster'] = $request
                ->file('poster')
                ->store('posters', 'public');
        }

        $validated['created_by'] = Auth::id();

        Event::create($validated);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil ditambahkan.');
    }

    public function show(Event $event)
    {
        $event->load('category', 'organization');

        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        $categories = Category::orderBy('nama_kategori')->get();
        $organizations = Organization::orderBy('nama_organisasi')->get();

        return view(
            'admin.events.edit',
            compact(
                'event',
                'categories',
                'organizations'
            )
        );
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'tema' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'organization_id' => 'required|exists:organizations,id',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'lokasi' => 'required|max:255',
            'kuota' => 'required|integer|min:1',
            'status' => 'required|in:Gratis,Berbayar',
            'deskripsi' => 'required',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('poster')) {

            if ($event->poster && Storage::disk('public')->exists($event->poster)) {

                Storage::disk('public')->delete($event->poster);
            }

            $validated['poster'] = $request
                ->file('poster')
                ->store('posters', 'public');
        }

        $event->update($validated);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        if ($event->poster && Storage::disk('public')->exists($event->poster)) {

            Storage::disk('public')->delete($event->poster);
        }

        $event->delete();

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil dihapus.');
    }
}
