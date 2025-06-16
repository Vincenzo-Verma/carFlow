<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['name' => 'California'],
            ['name' => 'Texas'],
            ['name' => 'Florida'],
            ['name' => 'New York'],
            ['name' => 'Pennsylvania'],
            ['name' => 'Illinois'],
            ['name' => 'Ohio'],
            ['name' => 'Georgia'],
            ['name' => 'North Carolina'],
            ['name' => 'Michigan'],
            ['name' => 'New Jersey'],
            ['name' => 'Virginia'],
            ['name' => 'Washington'],
            ['name' => 'Arizona'],
            ['name' => 'Massachusetts'],
            ['name' => 'Tennessee'],
            ['name' => 'Indiana'],
            ['name' => 'Missouri'],
            ['name' => 'Maryland'],
            ['name' => 'Wisconsin'],
        ]);
    }
}
