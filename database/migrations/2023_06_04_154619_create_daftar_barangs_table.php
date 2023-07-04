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
        Schema::create('daftar_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('unit');
            $table->string('nama_barang_bukti')->nullable();
            $table->string('identitas_kendaraan')->nullable();
            $table->string('no_surat_tilang')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('no_laporan_polisi')->nullable();
            $table->string('penetapan_pengadilan')->nullable();
            $table->string('tempat_penyimpanan')->nullable();
            $table->string('penyidik')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('gambar1')->nullable();
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
        Schema::dropIfExists('daftar_barangs');
    }
};
