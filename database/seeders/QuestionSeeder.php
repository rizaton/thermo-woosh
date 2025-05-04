<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'slug' => Str::slug(fake()->sentence()),
            'question_text' => 'Manakah dari pernyataan berikut yang paling benar mengenai termodinamika?',
            'quiz_id' => Quiz::all()->first()->id,
        ]);
        Question::create([
            'slug' => Str::slug(fake()->sentence()),
            'question_text' => 'Sebuah mesin menerima 500 J energi panas dan melakukan kerja sebesar 300 J. Berdasarkan hukum pertama termodinamika, berapa energi yang tersisa dalam sistem?',
            'quiz_id' => Quiz::all()->first()->id,
        ]);
        Question::create([
            'slug' => Str::slug(fake()->sentence()),
            'question_text' => 'Mengapa tidak semua energi panas yang diterima oleh suatu sistem dapat diubah menjadi kerja?',
            'quiz_id' => Quiz::all()->first()->id,
        ]);
    }
}
