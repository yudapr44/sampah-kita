<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$request = Illuminate\Http\Request::create('/admin/artikel/1', 'POST', [
    'title' => 'Cara Memilah Sampah dari Rumah',
    'category' => 'Edukasi',
    'content' => 'Test content baru',
    'status' => 'Aktif'
]);

$controller = new App\Http\Controllers\AdminController();
try {
    $res = $controller->updateArtikel($request, 1);
    echo "STATUS: " . $res->getStatusCode() . "\n";
    echo "BODY: " . $res->getContent() . "\n";
} catch (\Throwable $e) {
    echo "EXCEPTION: " . $e->getMessage() . "\n" . $e->getTraceAsString() . "\n";
}
