<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\MaterialContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Symfony\Component\String\ByteString;

class MaterialContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialContent::create([
            'slug' => Str::slug(fake()->sentence()),
            'content_text' => 'Termodinamika merupakan salah satu fondasi penting dalam ilmu fisika dan teknik, yang berfokus pada bagaimana energi berpindah dan berubah bentuk dalam suatu sistem. Untuk memahami termodinamika secara efektif, kita bisa menggunakan pendekatan Pareto: cukup menguasai 20% konsep kunci untuk memahami 80% penerapannya. Konsep-konsep ini mencakup sistem dan lingkungan, energi dalam bentuk panas dan kerja, serta keadaan suatu zat seperti suhu, tekanan, dan volume.',
            'material_id' => Material::all()->find(1)->id,
        ]);
        MaterialContent::create([
            'slug' => Str::slug(fake()->sentence()),
            'content_text' => 'Kunci utama dari termodinamika terletak pada empat hukum fundamental: hukum nol, hukum pertama, hukum kedua, dan hukum ketiga. Dari keempat hukum ini, hukum pertama dan hukum kedua adalah inti pemahaman awal yang paling banyak digunakan dalam praktik — mulai dari memahami bagaimana mesin bekerja hingga bagaimana energi termal dikonversi menjadi energi listrik. Dengan memahami hubungan antara energi, kerja, dan entropi, siswa sudah mampu menjelaskan dan memprediksi banyak fenomena di sekitar kita.',
            'material_id' => Material::all()->find(1)->id,
        ]);
        MaterialContent::create([
            'slug' => Str::slug(fake()->sentence()),
            'content_text' => 'Sebagai contoh konkret, hukum pertama menyatakan bahwa energi tidak bisa diciptakan atau dimusnahkan, hanya bisa diubah bentuknya. Ini menjelaskan mengapa bahan bakar bisa menghasilkan gerak atau kenapa tubuh manusia membutuhkan makanan sebagai sumber energi. Sementara itu, hukum kedua mengajarkan bahwa tidak semua energi bisa diubah menjadi kerja secara sempurna — selalu ada energi yang "hilang" dalam bentuk panas, dan arah alami suatu proses selalu menuju ketidakteraturan yang lebih besar (entropi). Dengan dua hukum ini saja, kita telah memegang sebagian besar kendali untuk memahami dunia termal dan energi di sekitar kita.',
            'material_id' => Material::all()->find(1)->id,
        ]);
        MaterialContent::create([
            'slug' => Str::slug(fake()->sentence()),
            'content_image' => base64_encode(File::get(database_path('seeders/images/konsep/konsep_termodinamika.png'))),
            'material_id' => Material::all()->find(1)->id,
        ]);
    }
}
