<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Support\Str;
use App\Models\Quiz as Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'slug' => Str::slug(fake()->sentence()),
            'title' => 'Quiz Konsep Termodinamika',
            'description' => 'Quiz ini bertujuan untuk menguji pemahaman Anda tentang konsep-konsep dasar dalam termodinamika. Silakan jawab semua pertanyaan dengan benar.',
            'material_id' => Material::all()->first()->id,
        ]);
    }
}
