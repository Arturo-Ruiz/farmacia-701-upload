<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DayRatesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
    }
}
