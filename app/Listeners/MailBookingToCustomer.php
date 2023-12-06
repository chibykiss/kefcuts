<?php

namespace App\Listeners;

use App\Events\PaymentMadeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

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
        Log::channel('kef')->debug('customer_listener',collect($event->booking)->toArray());
    }
}