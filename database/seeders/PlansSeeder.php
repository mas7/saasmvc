<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Bronze Plan',
            'price' => 999,
            'stripe_plan_id' => null,
        ]);

        Plan::create([
            'name' => 'Silver Plan',
            'price' => 1999,
            'stripe_plan_id' => null,
        ]);

        Plan::create([
            'name' => 'Gold Plan',
            'price' => 2999,
            'stripe_plan_id' => null,
        ]);
    }
}
