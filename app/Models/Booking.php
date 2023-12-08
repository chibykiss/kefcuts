<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['email','ref','date','time_id','name','phone','message','payment_status','mark_done'];

    public function payment()
    {
        return $this->hasOne(Payment::class,'booking_id','id');
    }

    public function services() : BelongsToMany
    {
        return $this->belongsToMany(Service::class,'booking_services','booking_id','service_id');
    }

    public function time() : BelongsTo
    {
        return $this->belongsTo(Time::class, 'time_id');
    }
}
