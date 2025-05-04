<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => Str::slug(fake()->sentence()),
            'question_number' => fake()->randomDigit(),
            'question_answer' => fake()->randomElement(['A', 'B', 'C', 'D', 'E']),
            'question_text' => fake()->sentence(rand(3, 6)),
            'question_image' => fake()->imageUrl(),
            'quiz_id' => Quiz::factory(),
        ];
    }
}
