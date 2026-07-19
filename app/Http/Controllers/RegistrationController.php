<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccessMail;

class RegistrationController extends Controller
{
   public function create(Event $event)
   {
      return view('events.register', compact('event'));
   }

   public function store(Request $request, Event $event)
   {
      $validated = $request->validate([
         'nama_peserta' => 'required|max:255',
         'email' => 'required|email',
         'no_hp' => 'required|max:20',
         'nim' => 'nullable|max:30',
         'instansi' => 'nullable|max:255',
      ]);

      $validated['event_id'] = $event->id;
      $validated['status'] = 'Terdaftar';

      $registration = Registration::create($validated);

      Mail::to($registration->email)->send(new RegistrationSuccessMail($registration, $event));

      return redirect()
         ->route('registrations.success', $registration);
   }
   public function success(Registration $registration)
   {
      $registration->load('event.organization');

      return view('events.success', compact('registration'));
   }
}
