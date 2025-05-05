<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'title' => 'Konsep Termodinamika',
            'slug' => Str::slug('Konsep Termodinamika') . '-' . fake()->randomNumber(8, true),
            'description' => 'Termodinamika adalah cabang fisika yang mempelajari hubungan antara panas, energi, dan kerja dalam suatu sistem.',
        ]);
    }
}
