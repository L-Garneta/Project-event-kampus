<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with([
            'event.category',
            'event.organization'
        ])
            ->latest()
            ->paginate(10);

        return view('admin.registrations.index', compact('registrations'));
    }

    public function show(Registration $registration)
    {
        $registration->load([
            'event.category',
            'event.organization'
        ]);

        return view('admin.registrations.show', compact('registration'));
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()
            ->route('admin.registrations.index')
            ->with('success', 'Data registrasi berhasil dihapus.');
    }
}
