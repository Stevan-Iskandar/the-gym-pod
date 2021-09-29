<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'id_pod'        => 3,
                'id_user'       => 1,
                'status'        => 'Used',
                'booking_date'  => '2021-09-23 08:00:00',
                'booking_time'  => '2021-09-21 08:00:00',
            ],
            [
                'id_pod'        => 3,
                'id_user'       => 2,
                'status'        => 'Used',
                'booking_date'  => '2021-09-23 10:00:00',
                'booking_time'  => '2021-09-21 08:00:00',
            ],
            [
                'id_pod'        => 1,
                'id_user'       => 1,
                'status'        => 'Used',
                'booking_date'  => '2021-09-25 08:00:00',
                'booking_time'  => '2021-09-23 08:00:00',
            ],
            [
                'id_pod'        => 1,
                'id_user'       => 2,
                'status'        => 'Used',
                'booking_date'  => '2021-09-25 10:00:00',
                'booking_time'  => '2021-09-23 08:00:00',
            ],
            [
                'id_pod'        => 1,
                'id_user'       => 1,
                'status'        => 'Used',
                'booking_date'  => '2021-09-27 08:00:00',
                'booking_time'  => '2021-09-25 08:00:00',
            ],
            [
                'id_pod'        => 1,
                'id_user'       => 2,
                'status'        => 'Used',
                'booking_date'  => '2021-09-27 10:00:00',
                'booking_time'  => '2021-09-25 08:00:00',
            ],
            [
                'id_pod'        => 2,
                'id_user'       => 1,
                'status'        => 'pending',
                'booking_date'  => '2021-10-02 08:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
            [
                'id_pod'        => 2,
                'id_user'       => 2,
                'status'        => 'pending',
                'booking_date'  => '2021-10-02 11:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
            [
                'id_pod'        => 3,
                'id_user'       => 1,
                'status'        => 'pending',
                'booking_date'  => '2021-10-05 08:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
            [
                'id_pod'        => 3,
                'id_user'       => 2,
                'status'        => 'pending',
                'booking_date'  => '2021-10-05 11:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
            [
                'id_pod'        => 1,
                'id_user'       => 1,
                'status'        => 'pending',
                'booking_date'  => '2021-10-07 08:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
            [
                'id_pod'        => 2,
                'id_user'       => 2,
                'status'        => 'pending',
                'booking_date'  => '2021-10-07 12:00:00',
                'booking_time'  => '2021-09-28 08:00:00',
            ],
        ];

        foreach ($bookings as $booking)
        Booking::create($booking);
    }
}
