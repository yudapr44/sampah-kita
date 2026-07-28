<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

$sqlitePath = database_path('database.sqlite');
if (!file_exists($sqlitePath)) {
    touch($sqlitePath);
}

echo "Created database.sqlite\n";

// Set up sqlite connection dynamically
config(['database.connections.sqlite_export' => [
    'driver' => 'sqlite',
    'database' => $sqlitePath,
    'prefix' => '',
]]);

// Run migrations on sqlite_export
Artisan::call('migrate', [
    '--database' => 'sqlite_export',
    '--force' => true,
]);

echo Artisan::output();

// Copy data from default connection (mysql) to sqlite_export
$tables = ['users', 'articles', 'settings', 'visitors', 'galleries', 'nasabah', 'kategori_sampah', 'transaksi'];

foreach ($tables as $table) {
    if (Schema::hasTable($table)) {
        $rows = DB::connection('mysql')->table($table)->get();
        if ($rows->count() > 0) {
            DB::connection('sqlite_export')->table($table)->delete();
            foreach ($rows as $row) {
                DB::connection('sqlite_export')->table($table)->insert((array) $row);
            }
            echo "Copied {$rows->count()} rows to table {$table}\n";
        }
    }
}

echo "SQLITE SYNC COMPLETED SUCCESSFULLY!\n";
