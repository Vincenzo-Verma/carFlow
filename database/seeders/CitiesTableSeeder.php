<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            // California cities
            ['state_id' => 1, 'name' => 'Los Angeles'],
            ['state_id' => 1, 'name' => 'San Francisco'],
            ['state_id' => 1, 'name' => 'San Diego'],
            ['state_id' => 1, 'name' => 'Sacramento'],
            ['state_id' => 1, 'name' => 'Oakland'],

            // Texas cities
            ['state_id' => 2, 'name' => 'Houston'],
            ['state_id' => 2, 'name' => 'Dallas'],
            ['state_id' => 2, 'name' => 'Austin'],
            ['state_id' => 2, 'name' => 'San Antonio'],
            ['state_id' => 2, 'name' => 'Fort Worth'],

            // Florida cities
            ['state_id' => 3, 'name' => 'Miami'],
            ['state_id' => 3, 'name' => 'Orlando'],
            ['state_id' => 3, 'name' => 'Tampa'],
            ['state_id' => 3, 'name' => 'Jacksonville'],
            ['state_id' => 3, 'name' => 'St. Petersburg'],

            // New York cities
            ['state_id' => 4, 'name' => 'New York City'],
            ['state_id' => 4, 'name' => 'Buffalo'],
            ['state_id' => 4, 'name' => 'Rochester'],
            ['state_id' => 4, 'name' => 'Syracuse'],
            ['state_id' => 4, 'name' => 'Albany'],

            // Pennsylvania cities
            ['state_id' => 5, 'name' => 'Philadelphia'],
            ['state_id' => 5, 'name' => 'Pittsburgh'],
            ['state_id' => 5, 'name' => 'Allentown'],
            ['state_id' => 5, 'name' => 'Erie'],
            ['state_id' => 5, 'name' => 'Reading'],

            // Illinois cities
            ['state_id' => 6, 'name' => 'Chicago'],
            ['state_id' => 6, 'name' => 'Aurora'],
            ['state_id' => 6, 'name' => 'Peoria'],
            ['state_id' => 6, 'name' => 'Rockford'],
            ['state_id' => 6, 'name' => 'Joliet'],
        ]);
    }
}
