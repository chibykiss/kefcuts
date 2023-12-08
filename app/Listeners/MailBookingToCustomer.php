<?php

namespace App\Listeners;

use App\Events\PaymentMadeEvent;
use App\Mail\BookingMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailBookingToCustomer
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
        $booking = $event->booking;
        $services = $booking->services;
        $hour = $booking->time;
        $data = [
            'booking' => $booking,
            'service' => $services,
            'hour' => $hour
        ];
        Log::channel('kef')->debug('customer_listener',$data);

        $msg = 'Thanks for booking for a barbing session on kefcuts. Booking Details Below:';
        //send data to email
        Mail::to($booking->email)->send(new BookingMail($booking,$msg));
    }
}
