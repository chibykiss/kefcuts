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

        $data = $event->booking->toArray();

        $pdf_name = Str::slug($data['name'], '-').'-'.$data['id'].time().'.pdf';  

        Pdf::loadView('pdf.bookingpdf',['booking' => $data, 'referer' => 'kefcuts', 'text' => $msg])->save(storage_path("app/public/pdf/$pdf_name"));

        //save to db
        $db = Booking::where('id',$data['id'])->update([
            'pdf' => $pdf_name
        ]);
        if($db){
            Mail::to($kefcut)->send(new BookingMail($event->booking,$msg,'kefcuts'));
        }else{
            Log::channel('kefcut')->debug('the pdf could not be inserted to db');
        }
    }
}
