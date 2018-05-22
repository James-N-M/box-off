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
        DB::table('statuses')->insert([
        	'title' => 'Member'
        ]);
        // Add first location
        DB::table('locations')->insert([
        	'city' => 'Ontario'
        ]);
        // Add first club
        DB::table('clubs')->insert([
        	'location' => 1,
        	'name' => 'No Club'
        ]);

    }
}
