<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id' => $this->faker->numberBetween(1, 20),
            'model_id' => $this->faker->numberBetween(1, 35),
            'year' => $this->faker->numberBetween(2015, 2024),
            'price' => $this->faker->numberBetween(15000, 80000),
            'vin' => strtoupper($this->faker->bothify('??#############')),
            'mileage' => $this->faker->numberBetween(5000, 150000),
            'car_type_id' => $this->faker->numberBetween(1, 10),
            'fuel_type_id' => $this->faker->numberBetween(1, 7),
            'user_id' => $this->faker->numberBetween(1, 11),
            'city_id' => $this->faker->numberBetween(1, 30),
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->phoneNumber,
            'description' => $this->faker->paragraph(3),
            'published_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
