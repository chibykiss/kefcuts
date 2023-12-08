<?php

namespace App\Jobs;

use App\Events\PaymentMadeEvent;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class ProcessPaystackWebhookJob extends SpatieProcessWebhookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $payload = $this->webhookCall->payload;
        $data = $payload['data'];
        $event_type = $payload['event'];
        $amount = $data['amount'];
        $pay_ref = $data['reference'];
        $channel = $data['channel'];
        $data_id = $data['id'];
        $event_payload = $payload;
        
        $store = [
            'event' => $event_type,
            'amount' => $amount,
            'ref' => $pay_ref,
            'channel' => $channel,
            'dataid' => $data_id,
            'payload' => $event_payload
        ];
        //Log::channel('kef')->info('job:',$store);
        
        //get the payment itself
        $payment = Payment::where('trxref',$pay_ref);
        if(!$payment->exists()){
            abort(400);
        }

        $real_amount = $amount/100;

        $payment = $payment->first();
        if($event_type === 'charge.success')
        {
            if($real_amount != $payment->amount)
            {
                Log::channel('kef')->info('the amounts paid does not march the amount for product');
                return;
            }
            $payment->paid = 1;
            $payment->booking->update(['payment_status' => 'paid']);
            $booking_details = Booking::with('services','time')->find($payment->booking_id);
            PaymentMadeEvent::dispatch($booking_details);
            Log::channel('kef')->info('booking:',collect($booking_details)->toArray());
        }

        $payment->event_type = $event_type;
        $payment->channel = $channel;
        $payment->type = 'webhook';
        $payment->payload = $event_payload;
        $payment->save();

        //set booking as paid\
        
        Log::channel('kef')->info('Payment Info Saved. the End');
    }
}
