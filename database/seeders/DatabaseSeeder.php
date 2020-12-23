<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Ragnar',
            'email' => 'ragnar@fisherman.is',
            'password' => Hash::make('Puk0r@t3'),
        ]);

        DB::table('users')->insert([
            'name' => 'Elias',
            'email' => 'elias@fisherman.is',
            'password' => Hash::make('Puk0r@t3'),
        ]);
    }
}
