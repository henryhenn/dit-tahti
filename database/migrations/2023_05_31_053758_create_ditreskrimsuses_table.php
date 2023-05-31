<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ditreskrimsuses', function (Blueprint $table) {
            $table->id();
            $table->enum('barang_temuan', ['Daftar Barang Temuan', 'Barang Temuan Sebagai Barang']);
            $table->string('nama_barang_bukti');
            $table->string('jumlah');
            $table->string('no_laporan_polisi');
            $table->string('penetapan_pengadilan');
            $table->string('tempat_penyimpanan');
            $table->string('penyidik');
            $table->string('kondisi');
            $table->string('nama_pemilik');
            $table->text('keterangan');
            $table->string('gambar1');
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distreskrimsuses');
    }
};
