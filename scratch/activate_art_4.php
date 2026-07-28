<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$art4 = \App\Models\Article::find(4);
if ($art4) {
    $art4->status = 'Aktif';
    $art4->save();
    echo "ARTICLE 4 SET TO AKTIF!\n";
}
