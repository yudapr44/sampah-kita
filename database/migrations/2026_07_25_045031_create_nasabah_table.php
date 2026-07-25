<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekening')->unique(); // Contoh: BS-001
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('no_hp');
            $table->text('alamat');
            $table->decimal('saldo', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('nasabah');
    }
};