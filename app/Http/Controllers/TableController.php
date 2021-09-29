<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function booking(Request $request)
    {
        $bookings = Booking::with(['pod', 'user'])->get();
        return response()->json($bookings);
    }
}
