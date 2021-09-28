<?php

namespace App\Models;

class Booking extends BaseModel
{
    protected $fillable = [
        'id_pod',
        'id_user',
        'status',
        'booking_date',
        'booking_time',
    ];

    public function pod()
    {
        return $this->belongsTo(Pod::class, 'id_pod');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
