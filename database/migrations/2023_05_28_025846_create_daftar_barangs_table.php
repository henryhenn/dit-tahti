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
            $table->string('daftar_barang_temuan');
            $table->string('dit');
            $table->string('petugas_penyerah');
            $table->string('petugas_penerima');
            $table->integer('nomor_laporan_polisi');
            $table->integer('nomor_register_bb');
            $table->integer('nomor_label_barang_bukti');
            $table->string('jenis_barang_bukti');
            $table->string('foto_barang_bukti');
            $table->string('kondisi_barang_bukti');
            $table->text('keterangan');
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
