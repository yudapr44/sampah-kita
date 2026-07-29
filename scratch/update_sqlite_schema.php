<?php
putenv('DB_DATABASE=' . __DIR__ . '/../database/database.sqlite');
$_ENV['DB_DATABASE'] = __DIR__ . '/../database/database.sqlite';

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

config(['database.connections.sqlite.database' => database_path('database.sqlite')]);

// Drop database.sqlite and recreate fresh from migrations and seeders
$sqlitePath = database_path('database.sqlite');
if (file_exists($sqlitePath)) {
    unlink($sqlitePath);
}
touch($sqlitePath);

Artisan::call('migrate:fresh', [
    '--database' => 'sqlite',
    '--force' => true
]);

echo Artisan::output();

Artisan::call('db:seed', [
    '--database' => 'sqlite',
    '--force' => true
]);

echo Artisan::output();

echo "SQLITE DATABASE RECREATED WITH LONGTEXT IMAGE COLUMN SUCCESSFULLY!\n";
