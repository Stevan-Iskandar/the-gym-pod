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
        $pods = [
            [
                'name'  => 'Pod 1',
                'price' => 100000,
            ],
            [
                'name'  => 'Pod 2',
                'price' => 120000,
            ],
            [
                'name'  => 'Pod 3',
                'price' => 150000,
            ],
        ];

        foreach ($pods as $pod)
        Pod::create($pod);
    }
}
