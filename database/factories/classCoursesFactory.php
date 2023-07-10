<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\classCourses>
 */
class classCoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_class' => $this->faker->unique()->randomNumber(),
            'id_course' => $this->faker->unique()->randomNumber(),
            'id_lecture' => $this->faker->randomNumber(),
            'schema' => $this->faker->word(),
            'enrollment' => $this->faker->numberBetween(0, 100),
            'capacity' => $this->faker->numberBetween(30, 100),
            'status' => $this->faker->randomElement(['ongoing', 'finished', 'upcoming']),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];

    }
}
