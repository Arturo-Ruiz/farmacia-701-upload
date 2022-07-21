<?php

use Illuminate\Database\Seeder;

use App\DayRate;

class DayRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayRate::create([
            'value' => 4.8,
        ]);
    }
}
