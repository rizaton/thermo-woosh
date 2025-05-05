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
            'description' => 'Termodinamika nggak cuma soal teori—ia hadir di sekitar kita! Mulai dari kulkas, AC, mesin mobil, sampai air panas yang mendingin, semua patuh pada hukum termodinamika.',
            'url' => 'https://www.youtube.com/embed/Rs2WT0lCUY8',
        ]);
        Video::create([
            'title' => 'Hukum 1 Termodinamika',
            'description' => 'Hukum 1 Termodinamika membahas tentang kekekalan energi: energi tidak bisa diciptakan atau dimusnahkan, hanya bisa berubah bentuk. Dalam kimia, hukum ini menjelaskan bagaimana energi berpindah dalam reaksi—baik sebagai panas maupun kerja.',
            'url' => 'https://www.youtube.com/embed/5FVFbrT5KKs',
        ]);
        Video::create([
            'title' => 'Hukum 2 Termodinamika',
            'description' => 'Hukum kedua termodinamika menjelaskan arah alami dari perubahan energi: energi cenderung menyebar dan entropi (ketidakteraturan) selalu bertambah. Dalam video ini, kita bahas konsep entropi dan kenapa panas selalu mengalir dari benda panas ke dingin, bukan sebaliknya.',
            'url' => 'https://www.youtube.com/embed/y6pGjfi8FZw',
        ]);
        Video::create([
            'title' => 'Proses Isobarik',
            'description' => 'Proses isobarik adalah proses termodinamika yang terjadi pada tekanan tetap. Dalam video ini, kita bahas bagaimana energi dan volume berubah saat tekanan konstan dilengkapi contoh sederhana seperti pemanasan gas dalam piston!',
            'url' => 'https://www.youtube.com/embed/5B-YO2sm8Wk',
        ]);
        Video::create([
            'title' => 'Proses Isokhorik',
            'description' => 'Proses isokhorik adalah proses termodinamika di mana volume tetap, tapi tekanan dan suhu bisa berubah. Di video ini, kita bahas bagaimana energi dalam berubah saat volume gas tidak bertambah maupun berkurang.',
            'url' => 'https://www.youtube.com/embed/RUxEkL4in9g',
        ]);
        Video::create([
            'title' => 'Proses Isotermal',
            'description' => 'Proses isotermal adalah proses termodinamika yang terjadi pada suhu konstan. Di video ini, kita bahas bagaimana gas bisa melakukan kerja tanpa perubahan suhu dan kenapa energi masuk atau keluar sebagai panas!',
            'url' => 'https://www.youtube.com/embed/Ywpu6ILqCVg',
        ]);
        Video::create([
            'title' => 'Konsep Entropi',
            'description' => 'Awalnya kamar super rapi buku tersusun, baju terlipat, sepatu sejajar. Tapi setelah kuliah, camilan, tugas numpuk... boom! Kamar jadi kayak habis disapu angin. Inilah entropi: dari keteraturan ke kekacauan, secara alami.',
            'url' => 'https://www.youtube.com/embed/hPDrFWutL8c',
        ]);
    }
}
