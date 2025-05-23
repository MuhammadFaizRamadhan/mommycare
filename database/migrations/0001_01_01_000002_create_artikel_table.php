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
        Schema::create('artikel', function (Blueprint $table) {
            $table->integer('id_kartikel')->primary();
            $table->integer('id_kategori')->index();
            $table->string('nama_artikel');
            $table->text('konten_artikel');
            $table->string('foto_artikel');
            $table->datetime('waktu_terbit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
