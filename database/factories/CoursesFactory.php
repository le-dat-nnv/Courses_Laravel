<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'image' => $this->faker->imageUrl(),
            'duration' => $this->faker->date(), // thời gian hoàn thành khóa học
            'is_featured' => $this->faker->boolean(),
            'level' => $this->faker->word(),
            'rating' => $this->faker->numberBetween(1, 5),
            'enrollment_count' => $this->faker->numberBetween(0, 100),
            'id_category' => $this->faker->numberBetween(1, 5),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'is_published' => $this->faker->boolean(),
            'is_trash' => $this->faker->boolean(),
        ];
    }
}
