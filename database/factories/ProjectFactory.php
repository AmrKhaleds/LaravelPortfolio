<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'short_description' => fake()->text(150),
            'image' => fake()->image(public_path('storage/images'), 640,
            480,
            null,
            false,
            true,
            null,
            false),
            'long_description' => fake()->text(500),
            'brand_logo' => fake()->image(),
            'client' => fake()->name(),
            'industry' => fake()->name(),
            'services' => fake()->name(),
            'date' => now(),
            'website' => fake()->url(),
        ];
    }
}
