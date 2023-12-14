<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class NewsletterSubscriptionController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        if(Subscriber::where('email',$request->email)->exists()){
            return response()->json(2);
        }
        //store in the db
        $create = Subscriber::create([
            'email' => $request->email
        ]);
        if($create){
            return response()->json(1);
        }

    }
}
