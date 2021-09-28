<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::with(['pod', 'user'])->get();
        dd($bookings);
    }
}
