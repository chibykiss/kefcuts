<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['email','ref','date','time_id','name','phone','message','payment_status','mark_done'];

    public function payment()
    {
        return $this->hasOne(Payment::class,'booking_id','id');
    }
}
