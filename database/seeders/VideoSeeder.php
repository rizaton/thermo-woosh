<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Penerapan Termodinamika pada Kehidupan Sehari-hari',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/Rs2WT0lCUY8',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/5FVFbrT5KKs',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/y6pGjfi8FZw',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/5B-YO2sm8Wk',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/RUxEkL4in9g',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/Ywpu6ILqCVg',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika || Termodinamika Kimia - Kelompok 9 || IPB University',
            'description' => '',
            'url' => 'https://www.youtube.com/embed/hPDrFWutL8c',
        ]);
    }
}
