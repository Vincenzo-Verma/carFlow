<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class AlternativeCarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 100 cars using the factory
        Car::factory(100)->create()->each(function ($car) {
            // Add features for each car
            DB::table('cars_features')->insert([
                'car_id' => $car->id,
                'abs' => rand(0, 1),
                'air_conditioning' => rand(0, 1),
                'power_windows' => rand(0, 1),
                'power_door_locks' => rand(0, 1),
                'cruise_control' => rand(0, 1),
                'bluetooth_connectivity' => rand(0, 1),
                'remote_start' => rand(0, 1),
                'gps_navigation' => rand(0, 1),
                'heated_seates' => rand(0, 1),
                'climate_control' => rand(0, 1),
                'rear_parking_sensors' => rand(0, 1),
                'leather_seats' => rand(0, 1),
            ]);

            // Add random number of images for each car
            $imageCount = rand(2, 6);
            for ($i = 1; $i <= $imageCount; $i++) {
                DB::table('car_images')->insert([
                    'car_id' => $car->id,
                    'image_path' => "cars/car_{$car->id}/image_{$i}.jpg",
                    'position' => $i,
                ]);
            }
        });
    }
}
