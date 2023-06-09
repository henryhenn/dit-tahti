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
        Schema::table('ditresnarkobas', function (Blueprint $table) {
            $table->string('identitas_barang_bukti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ditresnarkobas', function (Blueprint $table) {
            $table->string('identitas_barang_bukti');
        });
    }
};
