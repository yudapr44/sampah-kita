<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$articles = \App\Models\Article::all();
foreach ($articles as $a) {
    echo "ID: " . $a->id . "\n";
    echo "TITLE: " . $a->title . "\n";
    echo "CATEGORY: " . $a->category . "\n";
    echo "CONTENT: " . $a->content . "\n";
    echo "IMAGE: " . $a->image . "\n";
    echo "STATUS: " . $a->status . "\n";
    echo "----------------------------------------\n";
}
