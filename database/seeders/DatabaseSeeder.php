<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test users first
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create additional test users
        User::factory(10)->create();

        // Call all seeders in the correct order (respecting foreign key constraints)
        $this->call([
            CarTypesTableSeeder::class,
            FuelTypesTableSeeder::class,
            MakersTableSeeder::class,
            ModelsTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            CarsTableSeeder::class,
            CarsFeaturesTableSeeder::class,
            CarImagesTableSeeder::class,
            FavouriteCarsTableSeeder::class,
        ]);
    }
}
