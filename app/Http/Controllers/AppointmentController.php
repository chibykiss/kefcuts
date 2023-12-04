<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Time;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __invoke()
    {
        $categories = Category::with('services')->get();
        $times = Time::all()->toArray();

        //checked times that have been booked for today


        if(date('D') !== 'Sat' && date('D') !== 'Sun' && date('D') !== 'Fri'){
            $times = array_splice($times, 1, 23); 
        }
        //return $times;
        return view('book', ['categories' => $categories,'times' => $times]);
    }
}
