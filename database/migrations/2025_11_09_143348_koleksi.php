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
        Schema::create('koleksi',function(Blueprint $table){
            $table->string('id_koleksi')->primary();
            $table->index('id_koleksi');
            $table->string('judul');
            $table->index('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('gambar');
            $table->string('isbn');
            $table->integer('jml_halaman')->nullable();
            $table->year('tahun_terbit')->nullable();
            $table->string('jenis_koleksi')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi');
    }
};
