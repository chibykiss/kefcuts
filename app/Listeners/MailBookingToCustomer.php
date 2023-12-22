<?php

namespace App\Listeners;

use App\Events\PaymentMadeEvent;
use App\Mail\BookingMail;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        // $booking = $event->booking;
        // $services = $booking->services;
        // $hour = $booking->time;
        // $data = [
        //     'booking' => $booking,
        //     'service' => $services,
        //     'hour' => $hour
        // ];
        // Log::channel('kef')->debug('customer_listener',$data);

        $msg = 'Thanks for booking for a barbing session on kefcuts. Booking Details Below:';

        $data = $event->booking->toArray();

        $pdf_name = Str::slug($data['name'], '-').'-'.$data['id'].'-'.time().'.pdf';  

        Pdf::loadView('pdf.bookingpdf',['booking' => $data, 'referer' => 'customer', 'text' => $msg])->save(storage_path("app/public/customer/$pdf_name"));
        
        //save to db
        $db = Booking::where('id',$data['id'])->update([
                'cus_pdf' => $pdf_name
        ]);
        if($db){
            Mail::to($data['email'])->send(new BookingMail($event->booking,$msg));
        }else{
            Log::channel('kef')->debug('the pdf could not be inserted to db');
        }
        //send data to email
        //Mail::to($event->booking->email)->send(new BookingMail($event->booking,$msg));
    }
}
