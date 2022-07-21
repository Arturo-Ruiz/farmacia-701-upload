<?php

use Illuminate\Database\Seeder;

use App\Tax;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tax::create([
            'id' => 1,
            'name' => 'I.V.A. GENERAL 16%',
            'value' => 16,
        ]);

        Tax::create([
            'id' => 2,
            'name' => 'I.V.A. GEN-RED 9%',
            'value' => 9,
        ]);

        Tax::create([
            'id' => 3,
            'name' => 'I.V.A. REDUCIDO 8%',
            'value' => 8,
        ]);

        Tax::create([
            'id' => 4,
            'name' => 'RET. ISLR 2% SERVICIOS',
            'value' => 2,
        ]);

        Tax::create([
            'id' => 5,
            'name' => 'IGTF 3%',
            'value' => 3,
        ]);

        Tax::create([
            'id' => 9999,
            'name' => 'EXENTO DE I.V.A.',
            'value' => 0,
        ]);
    }
}
