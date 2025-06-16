<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makers')->insert([
            ['name' => 'Toyota'],
            ['name' => 'Honda'],
            ['name' => 'Ford'],
            ['name' => 'Chevrolet'],
            ['name' => 'BMW'],
            ['name' => 'Mercedes-Benz'],
            ['name' => 'Audi'],
            ['name' => 'Volkswagen'],
            ['name' => 'Nissan'],
            ['name' => 'Hyundai'],
            ['name' => 'Kia'],
            ['name' => 'Mazda'],
            ['name' => 'Subaru'],
            ['name' => 'Lexus'],
            ['name' => 'Porsche'],
            ['name' => 'Jaguar'],
            ['name' => 'Land Rover'],
            ['name' => 'Volvo'],
            ['name' => 'Tesla'],
            ['name' => 'Jeep'],
        ]);
    }
}
