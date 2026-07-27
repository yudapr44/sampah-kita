<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$article = \App\Models\Article::find(1);
if ($article) {
    $article->content = "Memilah sampah dari rumah merupakan langkah paling krusial dalam rantai pengelolaan sampah modern. Pemilahan yang benar di tingkat rumah tangga memudahkan proses daur ulang dan mengurangi beban sampah yang masuk ke Tempat Pemrosesan Akhir (TPA).\n\nKategori Pemilahan Sampah:\n\n1. Sampah Organik (Wadah Hijau):\nSisa makanan, kulit buah, sisa sayuran, dedaunan, dan ampas kopi/teh. Sampah organik ini sangat potensial diolah menjadi pupuk kompos alami untuk pekarangan.\n\n2. Sampah Anorganik Daur Ulang (Wadah Kuning):\nBotol plastik PET, gelas kemasan, kaleng alumunium, botol kaca, dan plastik bersih. Sampah jenis ini dapat disetorkan langsung ke Bank Sampah Desa untuk dikonversi menjadi saldo nilai ekonomi.\n\n3. Sampah Kertas & Karton (Wadah Biru):\nKardus bekas, kertas HVS, koran, majalah, dan bungkus karton. Pastikan kertas disimpan dalam kondisi kering.\n\n4. Sampah Residu & B3 (Wadah Merah/Hitam):\nBaterai bekas, pembersih kimia, lampu neon, popok bayi, dan kemasan kotor yang tidak dapat didaur ulang.\n\nTips Praktis di Rumah:\n• Sediakan 2-3 tempat sampah terpisah di area dapur.\n• Bilas dan keringkan botol/gelas plastik dari sisa minuman sebelum disimpan.\n• Pipihkan kemasan kardus & botol plastik agar menghemat tempat.\n• Setorkan sampah daur ulang secara rutin ke Bank Sampah Desa Balonggandu.";
    $article->save();
    echo "ARTICLE 1 UPDATED SUCCESSFULLY!\n";
} else {
    echo "ARTICLE 1 NOT FOUND!\n";
}
