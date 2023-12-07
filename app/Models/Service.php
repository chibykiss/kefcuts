<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'price'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Service::class,'booking_services','service_id','booking_id');
    }
}
