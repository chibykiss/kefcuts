<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Time extends Model
{
    use HasFactory;

    protected $fillable = ['time','hour_time','available_for'];

    public function bookings() : HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
