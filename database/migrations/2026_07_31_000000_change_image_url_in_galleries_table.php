<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        try {
            DB::statement("ALTER TABLE galleries MODIFY image_url LONGTEXT");
        } catch (\Throwable $e) {
            // Fallback for non-MySQL or if change() is used
            try {
                Schema::table('galleries', function (Blueprint $table) {
                    $table->longText('image_url')->change();
                });
            } catch (\Throwable $ex) {
                // Ignore if already longText
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        try {
            DB::statement("ALTER TABLE galleries MODIFY image_url TEXT");
        } catch (\Throwable $e) {
            // Ignore
        }
    }
};
