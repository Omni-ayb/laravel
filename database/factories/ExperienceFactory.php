<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'titre' => $this->faker->name(),
            'body' => $this->faker->paragraph(),
            'debut' => $this->faker->dateTime(),
            'fin' => $this->faker->dateTime(),
            'cv_id' => $this->faker->randomElement([27,28,29,30,31])
        ];
    }
}
