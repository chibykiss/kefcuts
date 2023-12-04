<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Time;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __invoke()
    {
        $categories = Category::with('services')->get();
        $times = Time::all();

     
        //checked times that have been booked for today
        $bookedTimes = Booking::where('date',date("Y-m-d"))->pluck('time_id');

        return $times;

        $availableTimes = $times->reject(function($time) use ($bookedTimes){
            return $bookedTimes->contains($time->id);
        });

        

        // if(date('D') !== 'Sat' && date('D') !== 'Sun' && date('D') !== 'Fri'){
        //     $times = array_splice($times, 1, 23); 
        // }
        //return $times;
        return view('book', ['categories' => $categories,'times' => $times]);
    }
}
