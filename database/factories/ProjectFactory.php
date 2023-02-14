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
            'name' => fake()->unique()->__callwords(rand(1, 5), true),
            'description' => fake()->boolean()
            ? fake()->paragraph()
            : null,
            'main_image' => fake()->unique()->imageUrl(640, 480, 'animals', true),
            'release_date' => fake()->date('2022_10_01'),
            'repo_link' => fake()->unique()->url(),
        ];
    }
}