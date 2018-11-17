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
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'type' => 'Admin',
            'location' => 'Windsor',
            'club' => 'Club Admin',
            'about' => 'Admin user',
            'password' => bcrypt('admin'),
        ]);
        $this->call(UsersTableSeeder::class);
    }
}
