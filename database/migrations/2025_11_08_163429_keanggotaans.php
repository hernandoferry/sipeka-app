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
        Schema::create('keanggotaan', function (Blueprint $table) {
            $table->integer('id_anggota')->primary();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jurusan');
            $table->integer('hp')->unique();
            $table->date('tgl_aktif');
            $table->date('tgl_kadaluarsa');
            $table->enum('status', ['active', 'suspend', 'inactive']); // status user 
            $table->text('catatan')->nullable();
            $table->timestamps();
        });

        

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keanggotaan');
    }
};
