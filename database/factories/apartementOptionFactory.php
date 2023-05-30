<?php

namespace Database\Factories;

use App\Models\apartement;
use App\Models\option;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\apartementOption>
 */
class apartementOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $apartmentId = apartement::inRandomOrder()->first()->id;
        $optionId = option::inRandomOrder()->first()->id;

    return [
        'idA' => $apartmentId,
        'idO' => $optionId
    ];
        
    }
}
