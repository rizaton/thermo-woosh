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
            'slug' => 'materi-' . md5('Konsep Termodinamika'),
            'description' => 'Termodinamika adalah cabang fisika yang mempelajari hubungan antara panas, energi, dan kerja dalam suatu sistem.',
        ]);
        Material::create([
            'title' => 'Hukum 1 Termodinamika',
            'slug' => 'materi-' . md5('Hukum I Termodinamika'),
            'description' => 'Hukum Pertama Termodinamika, juga dikenal sebagai hukum kekekalan energi, menyatakan bahwa energi tidak dapat diciptakan maupun dimusnahkan, tetapi hanya dapat diubah dari satu bentuk ke bentuk lainnya.',
        ]);
        Material::create([
            'title' => 'Proses Proses Hukum I Termodinamika',
            'slug' => 'materi-' . md5('Proses Proses Hukum I Termodinamika'),
            'description' => 'Hukum I Termodinamika menyatakan bahwa energi tidak dapat diciptakan atau dimusnahkan, hanya bisa diubah bentuknya. Dalam konteks ini, proses-proses termodinamika seperti isobarik (tekanan konstan), isokhorik (volume konstan), isotermal (suhu konstan), dan adiabatik (tanpa perpindahan kalor) menggambarkan bagaimana sistem menyerap atau melepaskan kalor, melakukan usaha, dan mengalami perubahan energi dalamannya. Setiap proses memiliki ciri khas hubungan antara variabel seperti tekanan, volume, suhu, dan kalor, serta bagaimana hukum I diterapkan secara spesifik di tiap kasus.',
        ]);
        Material::create([
            'title' => 'Hukum II Termodinamika',
            'slug' => 'materi-' . md5('Hukum II Termodinamika'),
            'description' => 'Hukum Termodinamika Kedua menyatakan bahwa dalam proses termodinamika, entropi total alam semesta cenderung meningkat. Entropi adalah ukuran ketidakteraturan atau kekacauan sistem, dan hukum ini menunjukkan bahwa energi cenderung menyebar dan menjadi kurang tersedia untuk melakukan kerja. Secara praktis, hukum ini menjelaskan mengapa panas mengalir dari benda panas ke benda dingin dan mengapa mesin tidak bisa 100% efisien dalam mengubah energi panas menjadi kerja.'
        ]);
        Material::create([
            'title' => 'Siklus Carnot',
            'slug' => 'materi-' . md5('Siklus Carnot'),
            'description' => 'Siklus Carnot adalah siklus termodinamika ideal yang terdiri dari dua proses isotermal (suhu konstan) dan dua proses adiabatik (tanpa perpindahan kalor). Siklus ini digunakan untuk menggambarkan efisiensi maksimum yang dapat dicapai oleh mesin kalor. Dalam siklus ini, zat kerja mengalami perubahan fase antara dua reservoir panas pada suhu berbeda, dan efisiensi mesin Carnot ditentukan oleh perbandingan suhu reservoir panas dan dingin.'
        ]);
        Material::create([
            'title' => 'Mesin Pendingin dan Entropi.',
            'slug' => 'materi-' . md5('Mesin Pendingin dan Entropi.'),
            'description' => 'Mesin pendingin adalah perangkat yang digunakan untuk mengeluarkan panas dari suatu sistem dan memindahkannya ke lingkungan sekitarnya. Dalam konteks hukum kedua termodinamika, mesin pendingin beroperasi dengan cara yang melibatkan perubahan entropi. Ketika mesin pendingin bekerja, ia menyerap panas dari ruang yang lebih dingin dan melepaskannya ke ruang yang lebih panas, sehingga meningkatkan entropi total sistem. Prinsip ini menjelaskan bagaimana mesin pendingin dapat menjaga suhu rendah di dalam ruangan atau perangkat tertentu.'
        ]);
    }
}
