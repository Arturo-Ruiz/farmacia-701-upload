<?php

use Illuminate\Database\Seeder;

use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Arturo Ruiz',
            'email' => 'arturo@admin.com',
            'password' => bcrypt('A37G*v<at!}dMn945!ZP'),
        ]);

        User::create([
            'name' => 'Henry Silva',
            'email' => 'henry@admin.com',
            'password' => bcrypt('%fc%"K}edw8Z;646GS4C'),
        ]);

        User::create([
            'name' => 'Humberto Sánchez',
            'email' => 'humberto@farmacia701.com',
            'password' => bcrypt('jN>q92}TOy94N!?jY6!r'),
        ]);

    }
}
