<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\option;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        $optionsList = ['swimming pool', 'gym', 'terrace', 'balcony', 'garage', 'parking', 'gardening', 'elevator', 'jacuzzi'];
        foreach ($optionsList as $value) {
            option::create(['name' => $value]);
        }
        \App\Models\apartement::factory(40)->create();
        \App\Models\ApartementOption::factory(40)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
