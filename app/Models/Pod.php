<?php

namespace App\Models;

class Pod extends BaseModel
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id_pod');
    }
}
