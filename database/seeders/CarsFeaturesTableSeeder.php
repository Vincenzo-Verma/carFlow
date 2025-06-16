<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [];

        for ($carId = 1; $carId <= 50; $carId++) {
            $features[] = [
                'car_id' => $carId,
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
            ];
        }

        DB::table('cars_features')->insert($features);
    }
}
