<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaterialContent>
 */
class MaterialContentFactory extends Factory
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
            'content_text' => fake()->text(),
            'content_image' => fake()->image(),
            'reference' => fake()->sentence(),
            'material_id' => Material::factory(),
        ];
    }
}
