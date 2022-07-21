<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => "Plasticos",
        ]);

        Category::create([
            'id' => 2,
            'name' => "Medicinas",
        ]);

        Category::create([
            'id' => 3,
            'name' => "Miselaneos",
        ]);

        Category::create([
            'id' => 4,
            'name' => "Importados",
        ]);

        Category::create([
            'id' => 5,
            'name' => "Sumplementos y Medicina Natural",
        ]);

        Category::create([
            'id' => 6,
            'name' => "Alimentos",
        ]);

        Category::create([
            'id' => 9999,
            'name' => "No definido",
        ]);
    }
}
