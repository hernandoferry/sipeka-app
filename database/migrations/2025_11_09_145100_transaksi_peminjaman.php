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
        Schema::create('transaksi_peminjaman',function(Blueprint $table){
            $table->id('id_transaksi');
            $table->integer('id_keanggotaan');
            $table->string('id_eksemplar');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->date('tgl_pengembalian');
            $table->enum('status',['dipinjam','dikembalikan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_peminjaman');
    }
};
