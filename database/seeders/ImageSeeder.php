<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Images::create([
            'description' => 'Profil',
            'content' => base64_encode(File::get(database_path('seeders/images/profile.png'))),
        ]);
        Images::create([
            'description' => 'Gambar Konsep Termodinamika',
            'content' => base64_encode(File::get(database_path('seeders/images/no-bg-landing-hero.png'))),
        ]);
    }
}
