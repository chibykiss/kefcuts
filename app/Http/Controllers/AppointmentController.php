<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $categories = Category::with('services')->get();

        $availableTimes = $this->processAvailableTime(date("Y-m-d"));
    
        return view('book', ['categories' => $categories,'times' => $availableTimes]);
    }

    public function getAvailableTime(Request $request)
    {
        $newtimes = $this->processAvailableTime($request->date);
        
        return view('partials.time_option',['newtimes' => $newtimes]);
    }


    private function processAvailableTime($date)
    {

        $dayOfWeek = date('N', strtotime($date));

        // Define the start and end times based on the day of the week
        $startTime = ($dayOfWeek >= 5) ? '08:00' : '09:00';
        $endTime = ($dayOfWeek >= 5)? '22:00' : '20:00';

        
        $times = Time::where('hour_time', '>=', $startTime)
        ->where('hour_time', '<=', $endTime)
        ->get();
     
        //checked times that have been booked for the given date
        $bookedTimes = Booking::where('date',$date)->pluck('time_id');

        //remove times that have been booked
        return $times->reject(function($time) use ($bookedTimes){
            return $bookedTimes->contains($time->id);
        });
    }
}
