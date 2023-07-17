<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // basic plan
        Plan::create([
            'name' => 'basic',
            'description' =>
                'This is a free plan which includes 15 monitors with interval 1 minute',
            'interval' => 60,
            'monitor' => 15,
            'cost' => 0,
        ]);

        // premium plan
        Plan::create([
            'name' => 'premium',
            'description' =>
                'This is a premium plan which includes 15 monitors with interval 1 minute',
            'interval' => 60,
            'monitor' => 15,
            'cost' => 5,
        ]);
    }
}
