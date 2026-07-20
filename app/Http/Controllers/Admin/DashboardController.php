<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Organization;
use App\Models\Registration;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEvent = Event::count();

        $totalRegistrasi = Registration::count();

        $totalKategori = Category::count();

        $totalOrganisasi = Organization::count();

        $chart = Organization::withCount('events')
            ->orderByDesc('events_count')
            ->get();

        $eventAktif = Event::with('organization')
            ->whereDate('tanggal', '>=', now())
            ->orderBy('tanggal')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalEvent',
            'totalRegistrasi',
            'totalKategori',
            'totalOrganisasi',
            'chart',
            'eventAktif'
        ));
    }
}
