<?php
putenv('DB_DATABASE=' . __DIR__ . '/../database/database.sqlite');
$_ENV['DB_DATABASE'] = __DIR__ . '/../database/database.sqlite';

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

config(['database.connections.sqlite.database' => database_path('database.sqlite')]);

Artisan::call('db:seed', [
    '--database' => 'sqlite',
    '--force' => true
]);

echo Artisan::output();
echo "SQLITE SEED COMPLETE!\n";
