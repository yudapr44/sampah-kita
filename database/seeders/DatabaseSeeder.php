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

        // 6. Default Gallery Items
        if (class_exists(\App\Models\Gallery::class)) {
            $galleries = [
                [
                    'title' => 'Seminar Teknologi Masa Depan 2024',
                    'category' => 'Education',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBrLZGkAjJrjdoHbLfPIzS7u8xtdIgRNJwbsWVHBrJuOGqYhFcZxCwCwSx9ypOpxHLoo1P30zHKBJ96J2B-eXUvEmVPVBczIV3cT9LJgYGjwuX8MbdVc6A1VPGXGNmoKDKzQnTZYHF3Sjm7nBonPhG6X3dLApQZoUFgwo3tWUy-NHrYxVYphEbLq7kpHfj0cFlBmAhQ0iVLzmGRmwwxqkyR6IFgisWWUu54tFDHUqA47qoWWufT5B0DhA',
                    'description' => 'Kegiatan seminar edukasi teknologi daur ulang modern yang diselenggarakan di Desa Balonggandu. Acara ini dihadiri oleh warga dan pemuda desa untuk memaparkan inovasi pemilahan sampah digital serta pengolahan limbah berbasis teknologi ramah lingkungan.',
                    'uploader' => 'Admin Utama',
                    'is_featured' => true
                ],
                [
                    'title' => 'Lab Sains Terpadu - Gedung B',
                    'category' => 'Sains',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCYvgcFEUloa2Kwn-ysc7V9nmoVMTomgPg8LE6L1JeNMnjPRxvWKLB1MLk8cQJ8ULoQDKfKo_wRe8SvnjCVKODBWWlwYjIiJoED5e4bbkSL2GpQ8RoRD_zLa-s3rISfotRASPXeKikZHwL_HpIhO_zxrC0RCm7Syw3XjV8j9e3sifYzI7zdRGARZP5wzREnl6KIX4cDTV0JqFY4q2Ju_FO4WGpKX03kG1mo5gaBH07GEZtgkzZOKLGCig',
                    'description' => 'Fasilitas laboratorium uji kualitas tanah dan kompos organik Desa Balonggandu. Laboratorium ini digunakan untuk menguji kandungan hara pupuk kompos hasil olahan warga sebelum didistribusikan ke lahan pertanian desa.',
                    'uploader' => 'Dr. Ahmad',
                    'is_featured' => false
                ],
                [
                    'title' => 'Tutorial SIM Akademik',
                    'category' => 'Education',
                    'type' => 'video',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBaH-vRkmQYqx1v6YH4NwaAZspWpu7T0IbyrVcmB43aKTuIEm2srZB6uw6-tSzcwwh4Wr-RtE4_v-6tiwjn72DEjKklOpQBjdjIcGG2y9UL5BnwAdhjhf4xFjpbWOV1Njq4tsfOREPrdE2rDPD4R4FhVgSTDmczCVoUbbKAjbhYbJfyK0oKl0CJjDFarBguMWq_2le2WjEBLFh1hV_Pqrcw2u6AtBcmH8p2yMuwMaIP8A04xbCCqQsflg',
                    'description' => 'Panduan video edukasi tata cara penggunaan aplikasi sistem informasi pengelolaan sampah dan pendaftaran nasabah bank sampah digital bagi pengurus RT dan warga desa Balonggandu.',
                    'uploader' => 'IT Support',
                    'is_featured' => false
                ],
                [
                    'title' => 'Fasilitas Taman Kampus',
                    'category' => 'Fasilitas',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCm9VWZaj6agdSJSc2A73YTAb_to06vnzuyc5pksmoZJXN8A4-MTAc8MTjvT9nOA1rdZ3AEpGfJ7IdOpbNX0v0XNSoaJkoKTIkQTeZ2tnySqnZeARzlByQS-RF-oXHcIycplspkwdd4iEGnsdVxuJ4cyaQqfwBGpAvGFL5Px-MpKnbFUJ8S9-PJsqBlYNS5Q--B2oeutBGASQHvWyPDSBCJw-uj7RSZF9_DRtRNxFS_6ioLZttiM2Hx8A',
                    'description' => 'Penataan area ruang terbuka hijau (RTH) dan taman edukasi ramah lingkungan Desa Balonggandu yang memanfaatkan hasil pupuk kompos organik warga.',
                    'uploader' => 'Admin Fasilitas',
                    'is_featured' => false
                ],
                [
                    'title' => 'Modern Computer Center',
                    'category' => 'Fasilitas',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBmlThvsd-mRxCq3XPDVv0cItePmr9ptwGd_B0-QvXWkbtGcmJZT9xBhX9wBVEXYve4W8AZWVdEeYcYGAaAe8CboEo3U_-PxWVCA8_Ild14oM3vg0K-oksulIINzpBoXP_Vki20yuVzVufLoZdCn1dpY7Q9OECY2o4SPJrTF8EWSnVS3O1xGmX9wXNuUlw-SOPiCOwA1vA3IcLbLY6x8YkVyVrm_b3xADsAUAaz-4XGvhKMTXIDVN8FPQ',
                    'description' => 'Pusat kegiatan digitalisasi pendataan sampah desa dan pelatihan literasi teknologi bagi generasi muda Balonggandu.',
                    'uploader' => 'Admin IT',
                    'is_featured' => false
                ],
                [
                    'title' => 'Student Collaboration Hub',
                    'category' => 'Kegiatan',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDNONtqaIsF21St5Wd9osFDI4pVNSMhU2n-O0s48LkfSXgQUizavNTZqSJuNP5EgDR6itu7dam7os0CxIaVFRszOFiVvxSj3RDlmFIA1a9Qq6BAog5kMiOqON0Npipi7CYil-dlTZlnlWKEE_LUvzfXuACZ1KU85RwQXkoSG__0bC7LlB1G_2sjpfJ5wXZodeKg8z-vCtFdqWO0VY427DeLd2ine1PCmqlx08BPAAUHUjQKk53-u4r5Pg',
                    'description' => 'Kegiatan gotong royong dan diskusi interaktif kelompok pemuda desa dalam merancang program pemilahan sampah 3R.',
                    'uploader' => 'Sarah Lee',
                    'is_featured' => false
                ],
                [
                    'title' => 'Perpustakaan Pusat',
                    'category' => 'Fasilitas',
                    'type' => 'photo',
                    'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuChrp_vMnnOK1whljySagu7F0zdezeLmd8T3KYUvSvgXCXlwkXDmcpUInKon9sMGvErY4GvH6CFUXI6qz4emWONyTz7RDueE7z3Clid0xISk-rKdFU_f-iWcHcBpCO_f_WrINLnuSWqWDDcngz-iExWGsKWlqHtKfPSZBWqH30F6C15sN-fVVPNuCNxRjD-npVgb-1tMG3RGt1EeQwNKgALSJsluniGPpNbOcg9BtgTXEIFiddWh-RJNw',
                    'description' => 'Pusat bacaan dan galeri literasi lingkungan hidup yang menyediakan buku-buku panduan daur ulang dan pemberdayaan masyarakat Balonggandu.',
                    'uploader' => 'Librarian',
                    'is_featured' => false
                ]
            ];
            foreach ($galleries as $gal) {
                \App\Models\Gallery::updateOrCreate(
                    ['title' => $gal['title']],
                    $gal
                );
            }
        }
    }
}
