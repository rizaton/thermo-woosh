# ThermoWoosh

**ThermoWoosh** adalah platform media pembelajaran interaktif berbasis web yang dirancang khusus untuk membantu siswa memahami konsep-konsep **Termodinamika** dalam Fisika dengan cara yang menyenangkan dan interaktif.

## 🚀 Fitur Utama

- **Materi Pembelajaran:** Modul pembelajaran terstruktur yang mencakup konsep dasar, Hukum I Termodinamika, Hukum II Termodinamika, dan penerapannya.
- **Video Pembelajaran:** Dukungan visual melalui video untuk memperdalam pemahaman materi.
- **Kuis Interaktif:** Evaluasi pemahaman siswa dengan kuis yang terintegrasi dengan setiap modul materi.
- **Referensi:** Kumpulan sumber daya tambahan untuk memperluas wawasan siswa.
- **Manajemen Siswa:** Sistem yang melacak progres belajar dan hasil kuis siswa.

## 🛠️ Teknologi yang Digunakan

- **Framework:** [Laravel 12](https://laravel.com)
- **Frontend:** [Tailwind CSS](https://tailwindcss.com) & Blade Components
- **Build Tool:** [Vite](https://vite.dev)
- **Database:** MySQL / SQLite

## 📂 Struktur Proyek Singkat

- `app/Models/`: Definisi model data seperti `Material`, `Quiz`, `Question`, `Student`, dll.
- `resources/views/`: Berisi tampilan antarmuka pengguna (UI) menggunakan sistem templating Blade.
- `database/migrations/`: Skema database untuk menyimpan data materi, kuis, dan progres siswa.
- `database/seeders/`: Data awal (dummy data) untuk mengisi materi pembelajaran dan soal kuis.

## ⚙️ Cara Menjalankan Proyek

1. **Clone repositori ini:**
   ```bash
   git clone <repository-url>
   cd thermo-woosh
   ```

2. **Instal dependensi PHP:**
   ```bash
   composer install
   ```

3. **Instal dependensi JavaScript:**
   ```bash
   npm install
   ```

4. **Konfigurasi lingkungan:**
   Salin file `.env.example` menjadi `.env` dan atur koneksi database Anda.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Jalankan migrasi dan seeder:**
   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan server pengembangan:**
   ```bash
   php artisan serve
   # Dan di terminal terpisah
   npm run dev
   ```

## 📖 Lisensi

Proyek ini bersifat open-source dan berada di bawah lisensi [MIT](LICENSE).
