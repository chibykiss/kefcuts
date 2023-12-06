<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingService;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreBookingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //return $request->all();
        $request->validate([
            'service_types' => 'required',
            'service_types.*' => 'required|numeric|distinct',
            'date' => 'required|date',
            'selecttime' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'phone' => 'required',
            'message' => 'nullable|string'
        ]);

        DB::beginTransaction();

        //make sure that date and time does not exist
        if(Booking::where('date',$request->date)->where('time_id',$request->selecttime)->exists()){
            //notify()->error('the time has been booked');
            return response()->json('the time has been booked');
        }
        //create a booking
        $book = Booking::create([
            'email' => $request->email,
            'ref' => Str::uuid()->toString(),
            'date' => $request->date,
            'time_id' => $request->selecttime,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
         ]);

         if(!$book){ 
             DB::rollBack();
             //notify()->error('an error occured');
             return response()->json('an error occured');
        }

        //store the service
        if(is_array($request->service_types)){
            foreach($request->service_types as $service)
            {
               BookingService::create([
                   'booking_id' => $book->id,
                   'service_id' => $service
               ]);
            }
        }else{
            BookingService::create([
                'booking_id' => $book->id,
                'service_id' => $request->service_types
            ]);
        }
       

         //store the payment
         Payment::create([
            'booking_id' => $book->id,
            'trxref' => $request->reference,
            'amount' => $request->amount,
            'gateway_message' => $request->gateway_message,
            'payload' => $request->payload
         ]);

         DB::commit();
         //notify()->success('booked successfully');
         return response()->json('booked successfully');
        //return $request->all();
    }
}
