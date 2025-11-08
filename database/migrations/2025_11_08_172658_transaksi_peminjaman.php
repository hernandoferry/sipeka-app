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
        Schema::create('transaksi_peminjaman', function(Blueprint $table){
            $table->id('id_transaksi_pinjam');
            $table->integer('id_anggota');
            $table->index('id_anggota');
            $table->string('id_buku');
            $table->string('id_eksemplar');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->date('tgl_pengembalian');
            $table->integer('rp_denda');
            $table->enum('status',['dikembalikan','dipinjam']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaski_peminjaman');
    }
};
