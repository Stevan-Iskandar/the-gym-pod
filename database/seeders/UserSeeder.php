<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Asep',
                'email'     => 'asep@email.com',
                'phone'     => '08123456789',
                'password'  => Hash::make('123456'),
            ],
            [
                'name'      => 'Udin',
                'email'     => 'udin@email.com',
                'phone'     => '08123456788',
                'password'  => Hash::make('123456'),
            ],
        ];

        foreach ($users as $user)
        User::create($user);
    }
}
