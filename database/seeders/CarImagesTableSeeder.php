<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [];

        for ($carId = 1; $carId <= 50; $carId++) {
            // Each car gets 3-5 random images
            $imageCount = rand(3, 5);

            for ($position = 1; $position <= $imageCount; $position++) {
                $images[] = [
                    'car_id' => $carId,
                    'image_path' => "cars/car_{$carId}/image_{$position}.jpg",
                    'position' => $position,
                ];
            }
        }

        DB::table('car_images')->insert($images);
    }
}
