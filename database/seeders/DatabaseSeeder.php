<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Setting;
use App\Models\KategoriSampah;
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
        $admin = User::updateOrCreate(
            ['email' => 'admin@balonggandu.desa.id'],
            [
                'name'     => 'Admin Balonggandu',
                'password' => bcrypt('password123'),
                'role'     => 'admin',
            ]
        );

        // 2. Create Default Article Data
        $articles = [
            [
                'title' => 'Panduan Pembuatan Alat Pembakaran Sampah Minim Asap',
                'category' => 'Pengelolaan',
                'content' => "Alat pembakar sampah ramah lingkungan (Tungku Insinerator Sederhana) dirancang khusus untuk meminimalisir asap rokok dan polusi saat pemusnahan sampah residu kotor.\n\nBahan & Alat:\n1. Drum bekas ukuran 200 Liter (logam tebal).\n2. Pipa cerobong besi diameter 3-4 inci.\n3. Sarangan/grill besi untuk alas pembakaran.\n4. Kipas blower kecil (optional untuk pembakaran sempurna).\n\nLangkah Pembuatan & Pengoperasian:\n1. Lubangi bagian bawah drum sebagai pintu sirkulasi udara dan pembuangan abu.\n2. Pasang pipa cerobong di penutup bagian atas drum.\n3. Masukkan sampah kering yang sudah dipilah.\n4. Kunci utama pembakaran minim asap adalah suhu tinggi di ruang pembakaran dan sampah yang benar-benar kering.",
                'status' => 'Aktif',
                'views' => 1840
            ],
            [
                'title' => 'Cara Membuat Lilin Aromaterapi dari Minyak Jelantah',
                'category' => 'Tips',
                'content' => "Minyak goreng bekas (jelantah) dapat diolah menjadi lilin aromaterapi yang cantik dan harum, mencegah pencemaran saluran air desa.\n\nBahan & Alat:\n1. Minyak jelantah 200 ml (yang sudah dijernihkan dengan arang/ampas kelapa).\n2. Soy wax / Sterin lilin 100 gram.\n3. Bibit parfum/essential oil (Lavender, Jeruk, atau Jasmine).\n4. Benang katun untuk sumbu lilin & wadah gelas kecil.\n\nLangkah Pembuatan:\n1. Panaskan minyak jelantah bersih bersama sterin/wax hingga meleleh sempurna.\n2. Matikan api, lalu tambahkan 15-20 tetes essential oil saat suhu agak hangat.\n3. Posisikan sumbu di tengah wadah gelas.\n4. Tuang adonan lilin perlahan dan biarkan memadat selama 4-6 jam.",
                'status' => 'Aktif',
                'views' => 2150
            ],
            [
                'title' => 'Panduan Lengkap Pembuatan Kompos Organik Rumah Tangga',
                'category' => 'Dasar',
                'content' => "Kompos organik memanfaatkan sampah sisa dapur dan dedaunan menjadi pupuk bernilai tinggi bagi tanaman warga.\n\nBahan:\n1. Sampah Cokelat (daun kering, serbuk gergaji, kardus bekas).\n2. Sampah Hijau (sisa sayur, kulit buah, ampas teh/kopi).\n3. Larutan EM4 pertanian + air gula sebagai aktivator mikroba.\n\nLangkah Pengomposan:\n1. Potong kecil-kecil sisa sampah dapur.\n2. Masukkan ke dalam komposter dengan urutan berlapis (sampah cokelat - sampah hijau).\n3. Siram larutan EM4 secukupnya (kelembaban 40-50%).\n4. Aduk kompos 1x seminggu. Dalam 3-4 minggu, kompos matang ditandai dengan warna hitam renyah dan beraroma tanah alami.",
                'status' => 'Aktif',
                'views' => 1920
            ],
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
            ]
        ];

        foreach ($articles as $art) {
            Article::updateOrCreate(
                ['slug' => Str::slug($art['title'])],
                [
                    'user_id'  => $admin->id,
                    'title'    => $art['title'],
                    'category' => $art['category'],
                    'content'  => $art['content'],
                    'status'   => $art['status'],
                    'views'    => $art['views']
                ]
            );
        }

        // 3. Create Default Setting Data
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'whatsapp'  => '+62 812 3456 7890',
                'email'     => 'admin@balonggandu.desa.id',
                'address'   => 'Jl. Raya Balonggandu No. 12, Kec. Jatisari, Kab. Karawang, Jawa Barat 41374',
                'instagram' => 'desa_balonggandu',
                'tiktok'    => 'desa_balonggandu'
            ]
        );

        // 4. Default Kategori Sampah untuk Bank Digital (jika model KategoriSampah ada)
        if (class_exists(KategoriSampah::class)) {
            $kategoriList = [
                ['nama_kategori' => 'Plastik PET (Botol Bening)', 'harga_per_satuan' => 3000],
                ['nama_kategori' => 'Kardus & Kertas Bekas', 'harga_per_satuan' => 1500],
                ['nama_kategori' => 'Kaleng / Logam', 'harga_per_satuan' => 4500],
                ['nama_kategori' => 'Minyak Jelantah', 'harga_per_satuan' => 6000],
            ];
            foreach ($kategoriList as $kat) {
                KategoriSampah::updateOrCreate(
                    ['nama_kategori' => $kat['nama_kategori']],
                    ['harga_per_satuan' => $kat['harga_per_satuan']]
                );
            }
        }

        // 5. Create Dynamic Visitor logs for last 7 days
        for ($i = 6; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $randomVisitorCount = rand(80, 260);

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
