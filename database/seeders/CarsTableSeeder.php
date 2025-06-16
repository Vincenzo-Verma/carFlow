<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [];

        for ($i = 1; $i <= 50; $i++) {
            $cars[] = [
                'maker_id' => rand(1, 6), // Random maker from 1-6
                'model_id' => rand(1, 35), // Random model from available models
                'year' => rand(2015, 2024),
                'price' => rand(15000, 80000),
                'vin' => 'VIN' . str_pad($i, 14, '0', STR_PAD_LEFT),
                'mileage' => rand(5000, 150000),
                'car_type_id' => rand(1, 10),
                'fuel_type_id' => rand(1, 7),
                'user_id' => 1, // Assuming first user exists
                'city_id' => rand(1, 30),
                'address' => rand(100, 9999) . ' ' . ['Main St', 'Oak Ave', 'Park Blvd', 'First St', 'Second Ave'][rand(0, 4)],
                'phone' => '+1' . rand(1000000000, 9999999999),
                'description' => 'Well-maintained vehicle in excellent condition. Regular maintenance performed.',
                'published_at' => Carbon::now()->subDays(rand(1, 30)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('cars')->insert($cars);
    }
}
