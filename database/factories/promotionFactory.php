<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\promotion>
 */
class promotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'promotion_name' => $this->faker->word,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'description' => $this->faker->text,
            'discount_percentage' => $this->faker->randomFloat(2, 0, 100),
            'minimum_purchase_amount' => $this->faker->randomFloat(2, 0, 1000),
            'maximum_discount_amount' => $this->faker->randomFloat(2, 0, 1000),
            'is_active' => $this->faker->boolean,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
