<?php

namespace App\Listeners;

use App\Events\PaymentMadeEvent;
use App\Mail\BookingMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailBookingToOwner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PaymentMadeEvent $event): void
    {
       // Log::channel('kef')->debug('owner_listener',collect($event->booking)->toArray());

        $msg = 'you have a new booking in kefcuts.com, Booking details below';

        $kefcut = env('OWNERS_EMAIL');
        
        Mail::to($kefcut)->send(new BookingMail($event->booking,$msg,'kefcuts'));
    }
}
