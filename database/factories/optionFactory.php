<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\option>
 */
class optionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $optionsList = ['swimming pool', 'gym', 'terrace', 'balcony', 'garage', 'parking','garding','elevator','jacouzy'];
        foreach ($optionsList as $value) {
            return [
                'Name' => $value
            ];        }
       
    }
}
