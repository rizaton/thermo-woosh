<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->unique()->randomElement(['A', 'B', 'C', 'D', 'E']),
            'text' => fake()->sentence(rand(3, 6)),
            'image' => fake()->imageUrl(),
            'question_id' => Question::factory(),
        ];
    }
}
