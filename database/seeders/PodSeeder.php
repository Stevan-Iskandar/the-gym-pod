<?php

namespace Database\Seeders;

use App\Models\Pod;
use Illuminate\Database\Seeder;

class PodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pod::insert([
            [
                'name'  => 'Pod 1',
                'price' => 100000,
            ],
            [
                'name'  => 'Pod 2',
                'price' => 120000,
            ],
        ]);
    }
}
