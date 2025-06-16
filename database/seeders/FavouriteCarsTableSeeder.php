<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavouriteCarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $favourites = [];

        // Add some random favourite cars for user 1
        $favouriteCarIds = [1, 5, 12, 18, 25, 33, 41];

        foreach ($favouriteCarIds as $carId) {
            $favourites[] = [
                'car_id' => $carId,
                'user_id' => 1,
            ];
        }

        DB::table('favourite_cars')->insert($favourites);
    }
}
