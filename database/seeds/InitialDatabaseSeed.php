<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InitialDatabaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Add first status
        DB::table('users')->insert([
            'name' => 'James',
            'email' => 'test@test.com',
            'type' => 'Member',
            'location' => 'Windsor',
            'club' => 'Windsor Amateur',
            'about' => 'Member',
            'password' => bcrypt('123456'),
        ]);
    }
}
