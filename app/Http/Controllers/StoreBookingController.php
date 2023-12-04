<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingService;
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
        $request->validate([
            'service_types' => 'required|array',
            'service_types.*' => 'required|numeric|distinct',
            'date' => 'required|date',
            'selecttime' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'nullable|string'
        ]);

        DB::beginTransaction();

        //make sure that date and time does not exist
        if(Booking::where('date',$request->date)->where('time_id',$request->selecttime)->exists()){
            notify()->error('the time has been booked');
            return back();
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
             notify()->error('an error occured');
             return back();
        }

        //store the service
         foreach($request->service_types as $service)
         {
            BookingService::create([
                'booking_id' => $book->id,
                'service_id' => $service
            ]);
         }
         DB::commit();
         notify()->success('booked successfully');
         return back();
        //return $request->all();
    }
}
