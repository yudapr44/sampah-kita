<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Article;

return new class extends Migration
{
    public function up(): void
    {
        // ── Lilin Aromaterapi ──────────────────────────────────────────────
        Article::where('title', 'LIKE', '%Lilin%')
            ->orWhere('title', 'LIKE', '%lilin%')
            ->each(function ($article) {
                $article->update([
                    'title'   => 'Cara Membuat Lilin Aromaterapi dari Minyak Jelantah',
                    'content' => "Mengubah minyak goreng bekas (jelantah) menjadi lilin aromaterapi yang cantik dan wangi. Selain menghemat biaya, cara ini efektif mencegah pencemaran saluran air desa.\n\nBahan & Alat:\n1. Minyak jelantah yang sudah disaring bersih (100 ml).\n2. Stearin / asam stearat pengeras lilin (100 gram).\n3. Minyak esensial/bibit parfum (Lavender, Jeruk, atau Vanila) 15-20 tetes.\n4. Sumbu lilin & tempat lilin (gelas kaca / kaleng bekas).\n5. Arang aktif / ampas kelapa untuk penjernih jelantah.\n\nLangkah Pembuatan:\n1. Rendam minyak jelantah dengan ampas kelapa atau arang aktif selama 24 jam untuk menghilangkan bau tengik, kemudian saring hingga bersih.\n2. Panaskan minyak jelantah bersih di atas api kecil bersama stearin/wax hingga meleleh sempurna dan menyatu.\n3. Matikan api, diamkan sejenak hingga sedikit mendingin, lalu teteskan minyak esensial sesuai selera aromaterapi Anda.\n4. Posisikan sumbu di tengah wadah gelas, tuang adonan lilin perlahan, dan diamkan hingga mengeras sempurna (4-6 jam).\n\nTips: Gunakan wadah gelas bekas selai atau kaleng biskuit sebagai tempat lilin agar lebih hemat dan ramah lingkungan!",
                ]);
            });

        // ── Kompos Organik ─────────────────────────────────────────────────
        Article::where('title', 'LIKE', '%Kompos%')
            ->orWhere('title', 'LIKE', '%kompos%')
            ->each(function ($article) {
                $article->update([
                    'title'   => 'Panduan Pembuatan Kompos Organik Rumah Tangga',
                    'content' => "Kompos organik memanfaatkan sampah sisa dapur dan dedaunan menjadi pupuk bernilai tinggi bagi tanaman warga.\n\nBahan yang Dibutuhkan:\n1. Sampah Cokelat (daun kering, serbuk gergaji, kardus) – sumber karbon.\n2. Sampah Hijau (sisa sayur, kulit buah, ampas kopi/teh) – sumber nitrogen.\n3. Tanah atau kompos lama sebagai starter mikroba.\n4. Air secukupnya untuk menjaga kelembapan.\n5. Wadah atau lubang tanah ukuran minimal 1 m³.\n\nLangkah Pembuatan:\n1. Siapkan wadah atau gali lubang di tanah sebagai tempat pengomposan.\n2. Tumpuk lapisan pertama: sampah cokelat (daun kering, kardus) setebal 10-15 cm.\n3. Tumpuk lapisan kedua: sampah hijau (sisa dapur) setebal 5-10 cm, lalu taburi sedikit tanah.\n4. Ulangi lapisan cokelat dan hijau bergantian hingga wadah penuh.\n5. Siram dengan air secukupnya agar lembap (tidak basah), lalu tutup rapat.\n6. Aduk tumpukan setiap 1-2 minggu sekali agar proses dekomposisi merata.\n7. Kompos siap digunakan dalam 4-8 minggu, ditandai dengan warna gelap dan bau tanah segar.\n\nManfaat: Kompos buatan sendiri dapat mengurangi sampah organik rumah tangga hingga 50% sekaligus menyuburkan tanaman pekarangan!",
                ]);
            });

        // ── Pemilahan Sampah / Tong Sampah ────────────────────────────────
        Article::where('title', 'LIKE', '%Memilah%')
            ->orWhere('title', 'LIKE', '%Pemilahan%')
            ->orWhere('title', 'LIKE', '%Tong Sampah%')
            ->each(function ($article) {
                $article->update([
                    'title'   => 'Cara Memilah Sampah dari Rumah',
                    'content' => "Memilah sampah dari rumah adalah langkah paling krusial dalam rantai pengelolaan sampah modern. Pemilahan yang benar di tingkat rumah tangga memudahkan proses daur ulang dan mengurangi beban TPA.\n\nTiga Jenis Tempat Sampah yang Wajib Ada:\n\n🟢 HIJAU – Sampah Organik:\nSisa makanan, kulit buah dan sayur, daun gugur, ampas kopi/teh, dan bahan alami lainnya. Dapat diolah menjadi kompos.\n\n🟡 KUNING – Sampah Anorganik (Daur Ulang):\nPlastik, botol, kaleng, kertas, kardus, kaca, dan logam. Pisahkan dan cuci sebelum dibuang agar mudah didaur ulang.\n\n🔴 MERAH – Sampah B3 (Bahan Berbahaya & Beracun):\nBaterai bekas, lampu bohlam, obat kadaluarsa, cat, oli bekas, dan produk kimia. JANGAN campur dengan sampah lain! Harus dibuang ke tempat penampungan khusus B3.\n\nTips Pemilahan:\n• Letakkan tiga jenis tempat sampah berdampingan di dapur.\n• Biasakan seluruh anggota keluarga memilah dari sumbernya.\n• Cuci kemasan plastik/kaleng sebelum dimasukkan tempat sampah anorganik.\n• Hubungi dinas lingkungan untuk jadwal pengambilan sampah B3.",
                ]);
            });
    }

    public function down(): void
    {
        // Tidak ada rollback — konten artikel tidak di-revert
    }
};
