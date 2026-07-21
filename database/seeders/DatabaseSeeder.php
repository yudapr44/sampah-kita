<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@balonggandu.desa.id'],
            [
                'name'     => 'Admin Balonggandu',
                'password' => bcrypt('password123'),
                'role'     => 'admin',
            ]
        );


        // 2. Create Default Article Data (Non-Dummy)
        $articles = [
            [
                'title' => 'Cara Memilah Sampah dari Rumah',
                'category' => 'Dasar',
                'content' => "Pemilahan sampah dari sumber adalah langkah pertama dan terpenting dalam pengelolaan sampah yang baik.\n\nLangkah-langkah praktis:\n1. Siapkan 3 Wadah Terpisah untuk Organik, Anorganik, dan Residu/B3.\n2. Kenali Jenis Sampah secara tepat.\n3. Cuci & Keringkan sampah Anorganik (botol, kaleng, dll) sebelum dibuang agar tidak bau dan lebih mudah didaur ulang.\n4. Setor ke Bank Sampah terdekat.\n5. Olah Sampah Organik di rumah menjadi pupuk kompos.",
                'status' => 'Aktif',
                'views' => 1240
            ],
            [
                'title' => 'Tips Mengurangi Sampah Sehari-hari',
                'category' => 'Tips',
                'content' => "Mulai dari kebiasaan kecil di rumah — setiap tindakan mengurangi sampah berdampak besar bagi lingkungan desa.\n\nTips:\n1. Bawa Tas Belanja Sendiri dari rumah saat belanja.\n2. Gunakan Botol Minum Isi Ulang.\n3. Kurangi Sisa Makanan dengan memasak secukupnya.\n4. Pilih Produk Ramah Lingkungan dengan kemasan minimal.\n5. Ajak Tetangga Berpartisipasi agar menjadi gerakan bersama.",
                'status' => 'Aktif',
                'views' => 980
            ],
            [
                'title' => 'Apa Itu Bank Sampah dan Cara Kerjanya',
                'category' => 'Pengelolaan',
                'content' => "Bank sampah adalah sistem pengelolaan sampah berbasis komunitas di mana warga bertindak layaknya nasabah — menabung sampah dan mendapatkan nilai ekonomi dari setoran mereka.\n\nMekanisme kerjanya sederhana: warga memilah sampah di rumah masing-masing, kemudian menyetorkan ke titik pengumpulan bank sampah. Petugas menimbang, mencatat, lalu memberikan kredit tabungan sesuai jenis dan berat sampah.",
                'status' => 'Aktif',
                'views' => 1560
            ],
            [
                'title' => 'Manfaat & Dampak Sosial Ekonomi Bank Sampah',
                'category' => 'Manfaat',
                'content' => "Bank sampah berdampak luas — bukan hanya soal lingkungan, tapi juga mendorong kemandirian ekonomi warga dan memperkuat kohesi sosial komunitas desa.\n\nManfaat Utama:\n1. Lingkungan Lebih Bersih (volume sampah TPA berkurang 30-40%).\n2. Tambahan Penghasilan bagi warga.\n3. Meningkatkan Gotong Royong.\n4. Membuka Lapangan Kerja Baru bagi pengelola.",
                'status' => 'Draft',
                'views' => 0
            ]
        ];

        foreach ($articles as $art) {
            Article::updateOrCreate(
                ['slug' => Str::slug($art['title'])],
                [
                    'title' => $art['title'],
                    'category' => $art['category'],
                    'content' => $art['content'],
                    'status' => $art['status'],
                    'views' => $art['views']
                ]
            );
        }

        // 3. Create Default Setting Data
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'whatsapp' => '+62 812 3456 7890',
                'email' => 'admin@balonggandu.desa.id',
                'address' => 'Jl. Raya Balonggandu No. 12, Kec. Jatisari, Kab. Karawang, Jawa Barat 41374',
                'instagram' => 'desa_balonggandu',
                'tiktok' => 'desa_balonggandu'
            ]
        );

        // 4. Create Dynamic Visitor logs for last 7 days
        for ($i = 6; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $randomVisitorCount = rand(80, 260); // Real representation of dynamic daily visits

            for ($j = 0; $j < $randomVisitorCount; $j++) {
                \App\Models\Visitor::create([
                    'ip_address' => '192.168.1.' . rand(1, 254),
                    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                    'visited_at' => $date
                ]);
            }
        }
    }
}
