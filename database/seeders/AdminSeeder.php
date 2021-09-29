<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'username'  => 'admin',
                'password'  => Hash::make('123456'),
            ],
        ];

        foreach ($admins as $admin)
        Admin::create($admin);
    }
}
