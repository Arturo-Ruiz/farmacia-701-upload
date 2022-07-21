<?php

use Illuminate\Database\Seeder;
 
use App\Carousel;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create();
        Carousel::create();
        Carousel::create();
        Carousel::create();
        Carousel::create();
    }
}
