<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\MaterialContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MaterialContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private function tite(string $content): array
    {
        return [
            'is_image' => false,
            'content' => $content,
            'is_list' => false,
            'is_hidden' => false,
            'is_title' => true,
        ];
    }

    private function text(string $content): array
    {
        return [
            'is_image' => false,
            'content' => $content,
            'is_list' => false,
            'is_hidden' => false,
            'is_title' => false,
        ];
    }

    private function hText(string $content): array
    {
        return [
            'is_image' => false,
            'content' => $content,
            'is_list' => false,
            'is_hidden' => true,
            'is_title' => false,
        ];
    }

    private function list(string $content): array
    {
        return [
            'is_image' => false,
            'content' => $content,
            'is_list' => true,
            'is_hidden' => false,
            'is_title' => false,
        ];
    }

    private function hList(string $content): array
    {
        return [
            'is_image' => false,
            'content' => $content,
            'is_list' => true,
            'is_hidden' => true,
            'is_title' => false,
        ];
    }

    private function image(string $content): array
    {
        return [
            'is_image' => true,
            'content' => $content,
            'is_list' => false,
            'is_hidden' => false,
            'is_title' => false,
        ];
    }

    private function hImage(string $content): array
    {
        return [
            'is_image' => true,
            'content' => $content,
            'is_list' => false,
            'is_hidden' => true,
            'is_title' => false,
        ];
    }

    private function parseImage(string $path): string
    {
        return base64_encode(File::get(database_path('seeders/images/' . $path)));
    }

    private function createContent(int $contentId, array $materials): void
    {
        foreach ($materials as $key => $material) {
            MaterialContent::create([
                'slug' => 'thermo-' . md5($material['content'] . $key . '-' . $contentId),
                'content_text' => !$material['is_image'] ? $material['content'] : null,
                'content_image' => $material['is_image'] ? $material['content'] : null,
                'is_list' => $material['is_list'],
                'is_hidden' => $material['is_hidden'],
                'is_title' => $material['is_title'],
                'material_id' => Material::all()->find($contentId)->id,
            ]);
        }
    }

    public function run(): void
    {

        $this->createContent(1, [
            $this->image($this->parseImage('konsep/thermo.jpg')),

            $this->text(
                'Termodinamika merupakan Cabang Ilmu Fisika yang mempelajari pemanfaatan Energi dalam bentuk Panas (Kalor) dan Mekanik (Usaha) terutama pada benda gas.'
            ),

            $this->text(
                "Contoh peristiwa dalam kehidupan sehari-hari:\n- Berbagai mesin kendaraan bermotor dan mesin pendingin\n- Adaptasi makhluk hidup terhadap musim"
            ),

            $this->text(
                "Cakupan termodinamika fokus pada sistem dan lingkungannya:\n- Sistem adalah suatu daerah atau wadah yang menjadi pusat perhatian kita, sedangkan\n- lingkungan adalah segala sesuatu di luar sistem tersebut. Sistem dan lingkungan dipisahkan oleh batas sistem.\n- lalu ada juga batasan sistem : Suatu permukaan yang memisahkan sistem dari lingkungannya. Batas ini bisa nyata (seperti dinding wadah) atau imajiner (seperti garis yang membatasi area analisis)."
            ),

            $this->text(
                'Contoh sederhana: Jika kita memanaskan air di dalam panci, panci tersebut adalah sistem, air adalah zat dalam sistem, lingkungan adalah segala sesuatu di luar panci (misalnya, kompor, udara di dapur). Pancinya adalah batas sistem. '
            ),
            $this->text(
                'Dengan memahami sistem, lingkungan, dan batas sistem, kita bisa menganalisis perubahan energi dan interaksi yang terjadi dalam suatu proses termodinamika.'
            ),

            $this->text(
                "Proses Termodinamika merupakan peristiwa perubahan keadaan benda dari keadaan awal ke ke adaan akhir, contoh: Ketika air direbus sampai mendidih, air mampu mengangkat tutup panci."
            ),

            $this->text(
                "Latihan soal:\nCoba sebutkan proses-proses pada termodinamika yang anda ketahui!"
            ),

            $this->hText(
                "Jawaban:\nProses Termodinamika terdiri dari Proses, Isobarik, isokhorik, Isotermik, dan Adiabatik.\n- Proses Isobarik adalah proses perubahan kedaan benda (gas) pada tekanan tetap.\n- Proses Isokhorik adalah proses perubahan kedaan benda (gas) pada volum tetap.\n- Proses Isotermik adalah proses perubahan kedaan benda (gas) pada suhu tetap.\n- Proses Adiabatik adalah proses perubahan kedaan benda (gas) saat tidak ada aliran kalor yang masuk ke dalam atau keluar system."
            ),
            $this->hImage($this->parseImage('konsep/proses.jpg')),
        ]);

        $this->createContent(2, [
            $this->image($this->parseImage('hukum-1-1/law.jpg')),
            $this->text(
                'Hukum termodinamika pertama menyatakan bahwa energi tidak dapat diciptakan atau dimusnahkan, hanya dapat diubah dari satu bentuk ke bentuk lain. Prinsip ini menegaskan kekekalan energi, di mana energi total dalam sistem tertutup tetap konstan, meskipun terjadi pertukaran atau konversi energi. Dengan kata lain, energi yang hilang oleh sistem akan sama dengan energi yang diperoleh oleh lingkungan, dan sebaliknya.'
            ),

            $this->text(
                "- Kekekalan Energi:\nHukum pertama termodinamika merupakan penerapan prinsip kekekalan energi, yang menyatakan bahwa energi tidak dapat hilang dari alam semesta, melainkan hanya berpindah atau berubah bentuk.\n\n- Perubahan Energi:\nPerubahan energi dalam suatu sistem dapat disebabkan oleh kerja (usaha) yang dilakukan pada sistem atau oleh perpindahan kalor ke atau dari sistem.\n\n- Rumus:\nPerubahan energi dalam sistem (ΔU) sama dengan jumlah kalor (Q) yang ditambahkan ke sistem dikurangi kerja (W) yang dilakukan oleh sistem. Secara matematis, ini dapat ditulis sebagai ΔU = Q - W.\n\n- Penerapan:\nHukum ini berlaku untuk berbagai proses termodinamika, termasuk proses isotermal (suhu konstan), proses adiabatik (tidak ada pertukaran kalor), dan proses isobarik (tekanan konstan).\n"
            ),

            $this->text(
                "Contoh:\nMotor bakar internal, di mana energi kimia dari bahan bakar diubah menjadi energi kinetik, merupakan contoh penerapan hukum pertama termodinamika."
            ),
            $this->image($this->parseImage('hukum-1-1/law1.jpg')),
        ]);

        $this->createContent(3, [
            $this->image($this->parseImage('hukum-1-2/proses.jpg')),
            $this->tite("\n\n\n\nProses Isobarik"),
            $this->text(
                'Proses isobarik adalah proses termodinamika di mana tekanan sistem tetap konstan selama perubahan keadaan. Artinya, saat tekanan tetap, volume gas bisa berubah dengan memasukkan atau mengeluarkan kalor. Contohnya adalah air mendidih pada tekanan konstan (misalnya dalam panci yang terbuka).'
            ),
            $this->text(
                'Dalam proses isobarik, usaha yang dilakukan oleh sistem atau terhadap sistem dapat dihitung menggunakan rumus W = PΔV, di mana W adalah usaha, P adalah tekanan (yang konstan), dan ΔV adalah perubahan volume.'
            ),
            $this->text(
                'Latihan Soal:'
            ),
            $this->hImage($this->parseImage('hukum-1-2/question1.jpg')),
            $this->hImage($this->parseImage('hukum-1-2/question1answer.jpg')),

            $this->tite("\n\n\n\nProses Isokhorik"),
            $this->text(
                "\n\nProses termodinamika dimana usaha yang dilakukan dalam sistem sama dengan nol adalah proses isokhorik. Proses isokhorik bisa diartikan sebagai proses tidak terjadinya perubahan volume apapun meskipun kalor telah dialirkan.\n\nKesimpulannya, gerakan atau usaha yang dilakukan oleh sistem dan lingkungan dalam sistem adalah nol (W=0). Contoh penerapan proses ini terdapat pada kipas angin"
            ),
            $this->image($this->parseImage('hukum-1-2/isokhorik.jpg')),
            $this->text(
                "\nLatihan Soal:"
            ),
            $this->image($this->parseImage('hukum-1-2/question2.jpg')),
            $this->hImage($this->parseImage('hukum-1-2/question2answer.jpg')),

            $this->tite("\n\n\n\nProses Isotermik/Isotermal"),
            $this->text(
                "Proses Isotermik/Isotermal. Proses isotermik adalah proses termodinamika di mana suhu sistem tetap konstan. Perubahan keadaan sistem, seperti perubahan tekanan atau volume, terjadi tanpa mengubah suhu. Secara sederhana, bisa dikatakan proses isotermik adalah perubahan keadaan gas dengan suhu yang tetap. \n\nLebih detailnya, proses isotermik melibatkan perpindahan panas ke dalam atau keluar sistem dengan kecepatan yang sangat lambat sehingga kesetimbangan termal tetap terjaga. Ini berarti bahwa sistem selalu memiliki waktu yang cukup untuk menyesuaikan diri dengan suhu lingkungan, sehingga suhu sistem tetap konstan selama proses berlangsung."
            ),
            $this->text(
                "Contoh penerapan proses isotermik:\n- Penggunaan gas ideal:\nGas ideal mengalami proses isotermik ketika perubahan keadaannya, seperti perubahan tekanan atau volume, terjadi dengan suhu yang tetap.\n- Pembakaran pop corn di panci:\nSaat pop corn dipanaskan di dalam panci, suhu panci akan tetap konstan selama proses pembakaran."
            ),
            $this->image($this->parseImage('hukum-1-2/isotermal1.jpg')),
            $this->image($this->parseImage('hukum-1-2/isotermal2.jpg')),
            $this->text(
                "\nLatihan Soal:"
            ),
            $this->image($this->parseImage('hukum-1-2/question3.jpg')),
            $this->hImage($this->parseImage('hukum-1-2/question3answer.jpg')),

            $this->tite("\n\n\n\nProses Adiabatik"),
            $this->text(
                "Proses adiabatik adalah proses termodinamika di mana tidak ada perpindahan panas antara sistem dan lingkungannya. Dengan kata lain, sistem dianggap terisolasi secara termal, sehingga perubahan energi internalnya hanya disebabkan oleh kerja yang dilakukan atau yang dilakukan terhadap sistem. "
            ),
            $this->image($this->parseImage('hukum-1-2/adiabatik1.jpg')),
            $this->text(
                'Perubahan energi internal sistem (ΔU) dalam proses adiabatik hanya disebabkan oleh kerja (W) yang dilakukan atau yang dilakukan terhadap sistem. Secara matematis, ΔU = W.'
            ),
            $this->text(
                'Pekerjaan yang dilakukan diberikan dengan mengintegralkan luas di bawah garis pV.'
            ),
            $this->text(
                "W = ∫pdV\natau, W = p ΔV\natau, W = p (V f -V i )"
            ),
            $this->text(
                "Contoh:\nKompresi gas di dalam silinder mesin mobil yang terjadi sangat cepat sehingga tidak sempat terjadi pertukaran panas dengan lingkungan, dianggap sebagai proses adiabatik."
            ),
            $this->image($this->parseImage('hukum-1-2/adiabatik2.jpg')),
            $this->text(
                "\nLatihan Soal:"
            ),
            $this->image($this->parseImage('hukum-1-2/question4.jpg')),
            $this->hImage($this->parseImage('hukum-1-2/question4answer.jpg')),

            $this->text(
                "\nBerikut adalah Tabel Rumus Proses Termodinamika"
            ),
            $this->image($this->parseImage('hukum-1-2/table.jpg')),
        ]);

        $this->createContent(4, [
            $this->image($this->parseImage('hukum-2/law.jpg')),
            $this->tite("\n\nProses Adiabatik"),
            $this->text(
                "Hukum termodinamika kedua menyatakan bahwa kalor akan mengalir secara spontan dari benda dengan suhu tinggi ke benda dengan suhu rendah, dan tidak akan mengalir secara spontan dalam arah sebaliknya. Ini berarti tidak mungkin membuat suatu mesin yang bekerja secara sempurna, mengubah semua energi panas menjadi usaha luar, tanpa kehilangan energi.\n\nLebih detail, hukum termodinamika kedua juga dapat dinyatakan sebagai peningkatan entropi alam semesta dalam setiap proses termodinamika spontan. Entropi adalah ukuran ketidakaturan atau keacakan dalam suatu sistem. Proses yang spontan adalah proses yang terjadi secara alami tanpa adanya input energi dari luar. Contohnya, jika kamu membiarkan secangkir kopi panas, kalor akan mengalir dari kopi ke lingkungan, sehingga suhu kopi akan turun dan entropi sistem (kopi dan lingkungan) akan meningkat."
            ),
            $this->text(
                "Berikut adalah beberapa poin penting mengenai hukum termodinamika kedua:\n- Kalor mengalir dari panas ke dingin:\nKalor akan selalu mengalir dari benda dengan suhu lebih tinggi ke benda dengan suhu lebih rendah. \n- Tidak ada mesin sempurna:\nTidak ada mesin yang dapat mengubah semua energi panas menjadi usaha luar tanpa kehilangan energi. \n- Entropi meningkat:\nEntropi alam semesta selalu meningkat dalam setiap proses termodinamika spontan. \n- Proses reversibel dan irreversibel:\nBeberapa proses termodinamika reversibel (dapat dibalikkan), tetapi kebanyakan proses termodinamika yang terjadi secara spontan adalah irreversibel (tidak dapat dibalikkan)."
            ),
            $this->text(
                'Secara umum, hukum termodinamika kedua menjelaskan arah aliran energi dan pentingnya entropi dalam sistem termodinamika.'
            ),
            $this->text(
                'Salah satu contoh penting dari hukum kedua termodinamika adalah model mesin kalor dan mesin pendingin.'
            ),
        ]);

        $this->createContent(5, [
            $this->tite(
                "Mesin Kalor/Carnot."
            ),
            $this->text(
                "\nMesin kalor adalah suatu jenis mesin yang mengkonversi energi panas menjadi energi mekanis. Prinsip dasar di balik mesin kalor adalah memanfaatkan perbedaan suhu antara dua sumber panas untuk menghasilkan kerja mekanis. Kalor yang digunakan mesin adalah:\nW = Q1-Q2."
            ),
            $this->text(
                "Mesin Carnot merupakan mesin ideal yang dapat beroperasi dalam suatu siklus termodinamika tertutup reversibel, di mana zat yang bekerja mengalami empat operasi berurutan, yaitu ekspansi isotermal, ekspansi adiabatik, kompresi isotermal, dan kompresi adiabatik"
            ),
            $this->image($this->parseImage('hukum-2/carnot1.jpg')),

            $this->text(
                "\nMesin carnot memanfaatkan prinsip kalor yang mengalir dari suhu tinggi ke suhu rendah tanpa perlu melakukan usaha. Saat aliran kalor terjadi, panas yang mengalir diubah menjadi usaha, misalnya gerak. Konsep tersebutlah yang ditemukan oleh Nicolas Leonard Sadi Carnot."
            ),
            $this->image($this->parseImage('hukum-2/carnot2.jpg')),

            $this->text(
                "\nSiklus Carnot.\nSebuah siklus termodinamika terjadi ketika suatu sistem mengalami rangkaian keadaan-keadaan yang berbeda, dan akhirnya kembali ke keadaan semula. Dalam proses melalui siklus ini, sistem tersebut dapat melakukan usaha terhadap lingkungannya, sehingga terkadang disebut mesin kalor. Sebuah mesin nyata (real) yang beroperasi dalam suatu siklus pada temperatur tertentu tidak mungkin melebihi efisiensi mesin Carnot."
            ),
            $this->image($this->parseImage('hukum-2/carnot3.jpg')),

            $this->text(
                "\n\nLatihan Soal:"
            ),
            $this->image($this->parseImage('hukum-2/question1.jpg')),
            $this->hImage($this->parseImage('hukum-2/question1answer.jpg')),
        ]);

        $this->createContent(6, [
            $this->tite("Mesin Pendingin"),
            $this->text(
                "\nMesin pendingin adalah perangkat yang dirancang untuk menurunkan dan menjaga suhu suatu ruangan atau kompartemen pada tingkat tertentu, lebih rendah dari suhu lingkungan sekitar."
            ),
            $this->image($this->parseImage('hukum-2/refrigerator1.jpg')),
            $this->text(
                "Mesin ini menggunakan siklus refrigerasi untuk memindahkan panas dari dalam ruangan ke luar ruangan.\n- Fungsi:\nMesin pendingin berfungsi untuk menciptakan suhu dingin atau sejuk dengan memindahkan panas dari suatu tempat ke tempat lain.\n- Cara Kerja:\nMesin pendingin menggunakan siklus refrigerasi yang melibatkan beberapa komponen utama seperti kompresor, kondensor, katup ekspansi, dan evaporator."
            ),
            $this->image($this->parseImage('hukum-2/refrigerator2.png')),
            $this->text(
                "- Siklus Refrigerasi:\nSiklus refrigerasi melibatkan pemindahan panas dari tempat yang ingin didinginkan ke tempat yang memiliki suhu lebih tinggi, sehingga tempat tersebut menjadi lebih dingin. \n- Jenis-jenis Mesin Pendingin:\nAda berbagai jenis mesin pendingin seperti kulkas (refrigerator), freezer, AC (air conditioner), dan lain-lain, masing-masing dengan fungsi dan kegunaan yang berbeda. \nKomponen Utama:\nKomponen utama mesin pendingin meliputi kompresor, kondensor, katup ekspansi, dan evaporator, yang bekerja secara bersama-sama untuk menghasilkan efek pendinginan."
            ),
            $this->image($this->parseImage('hukum-2/refrigerator3.jpg')),

            $this->tite("Entropi"),
            $this->text(
                "\nEntropi adalah ukuran banyaknya energi atau kalor yang tidak dapat diubah menjadi usaha."
            ),
            $this->image($this->parseImage('hukum-2/entropi1.jpg')),
            $this->text(
                "Besarnya entropi suatu sistem yang mengalami proses reversibel sama dengan kalor yang diserap sistem dan lingkungannya dibagi suhu mutlak sistem tersebut (T). Perubahan entropi (ΔS) adalah ukuran seberapa besar tingkat ketidakteraturan atau keacakan suatu sistem berubah. Jika entropi meningkat, sistem menjadi lebih acak (ΔS positif), sedangkan jika entropi menurun, sistem menjadi lebih teratur (ΔS negatif)."
            ),
            $this->image($this->parseImage('hukum-2/entropi2.png')),

            $this->text(
                "\n\nLatihan Soal mesin pendingin:"
            ),
            $this->image($this->parseImage('hukum-2/question2.jpg')),
            $this->hImage($this->parseImage('hukum-2/question2answer.jpg')),

            $this->text(
                "\n\nLatihan Soal perubahan Entropi:"
            ),
            $this->image($this->parseImage('hukum-2/question3.jpg')),
            $this->hImage($this->parseImage('hukum-2/question3answer.jpg')),
        ]);
    }
}
