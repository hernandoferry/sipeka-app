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
        Schema::create('keanggotaan',function(Blueprint $table){
            $table->integer('id_keanggotaan')->primary();
            $table->integer('id_user');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('hp');
            $table->string('jurusan');
            $table->date('tgl_aktif');
            $table->date('tgl_kadaluarsa');
            $table->enum('status',['aktiv','suspend']);
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
