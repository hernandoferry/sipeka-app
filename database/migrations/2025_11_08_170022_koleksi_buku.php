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
        Schema::create('koleksi', function(Blueprint $table){
            $table->string('id_buku')->unique();
            $table->string('judul_buku');
            $table->string('isbn');
            $table->string('penerbit')->nullable();
            $table->string('penulis')->nullable();
            $table->string('gambar_buku')->nullable();
            $table->integer('tahun_terbit_buku')->nullable();
            $table->integer('jumlah_halaman')->nullable();
            $table->integer('eksemplar')->nullable();
            $table->enum('status_buku',['rusak','hilang','tersedia']);
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
