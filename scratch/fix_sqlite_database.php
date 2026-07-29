<?php
$sqlitePath = __DIR__ . '/../database/database.sqlite';

if (!file_exists($sqlitePath)) {
    echo "NO SQLITE FILE FOUND AT {$sqlitePath}\n";
    exit(1);
}

try {
    $pdo = new PDO('sqlite:' . $sqlitePath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create temp table with TEXT image column
    $pdo->exec("CREATE TABLE IF NOT EXISTS articles_new (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER NULL,
        title TEXT NOT NULL,
        slug TEXT NOT NULL UNIQUE,
        category TEXT NOT NULL,
        content TEXT NOT NULL,
        image LONGTEXT NULL,
        status TEXT DEFAULT 'Aktif',
        views INTEGER DEFAULT 0,
        created_at DATETIME,
        updated_at DATETIME
    )");

    // Copy existing articles data to articles_new
    $pdo->exec("INSERT INTO articles_new (id, user_id, title, slug, category, content, image, status, views, created_at, updated_at)
                SELECT id, user_id, title, slug, category, content, image, status, views, created_at, updated_at FROM articles");

    // Drop old articles table and rename articles_new to articles
    $pdo->exec("DROP TABLE articles");
    $pdo->exec("ALTER TABLE articles_new RENAME TO articles");

    echo "SQLITE ARTICLES TABLE SUCCESSFULLY CONVERTED TO LONGTEXT IMAGE COLUMN!\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
