<?php

namespace App\Mail;

use App\Models\Registration;
use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $event;

    public function __construct( Registration $registration, Event $event)
    {
        $this->registration = $registration;
        $this->event = $event;
    }
    public function build()
    {
        return $this->subject('Pendaftaran Event Berhasil')
                    ->view('emails.registration-success')
                    ->with([
                        'registration' => $this->registration,
                        'event' => $this->event,
                    ]);
    }
   
}
