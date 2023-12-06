<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id','trxref','status','amount','gateway_message','type','payload'];

    protected $casts = ['payload' => 'array'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
