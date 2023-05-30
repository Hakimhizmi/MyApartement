<?php

namespace Database\Factories;

use App\Models\option;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\apartement>
 */
class apartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageNames = ['cover1.png', 'cover2.png', 'cover3.png', 'cover4.png', 'cover5.png',
         'cover6.png', 'cover7.png', 'cover8.png', 'cover9.png', 'cover10.png', 'cover11.png',
         'cover12.png', 'cover13.png'];
        return [
            'title' => $this->faker->sentence(),
            'cover' => $this->faker->randomElements($imageNames)[0],
            'description' => $this->faker->paragraphs(3, true),
            'surface' => $this->faker->randomFloat(2, 50, 500),
            'rooms' => $this->faker->numberBetween(1, 10),
            'pieces' => $this->faker->numberBetween(1, 5),
            'floor' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(50000, 500000),
            'sold' => $this->faker->boolean(),
            'city' => $this->faker->city(),
            'adresse' => $this->faker->streetAddress(),
            'postalcode' => $this->faker->numberBetween(5000, 10000),
        ];
}
}