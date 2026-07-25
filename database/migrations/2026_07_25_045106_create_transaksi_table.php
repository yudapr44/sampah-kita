<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->foreignId('nasabah_id')->constrained('nasabah')->onDelete('cascade');
            $table->foreignId('kategori_sampah_id')->nullable()->constrained('kategori_sampah');
            $table->decimal('berat', 8, 2)->default(0);
            $table->decimal('harga_satuan', 10, 2)->default(0);
            $table->decimal('total_harga', 12, 2);
            $table->enum('jenis_transaksi', ['setor', 'tarik_saldo']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('transaksi');
    }
};