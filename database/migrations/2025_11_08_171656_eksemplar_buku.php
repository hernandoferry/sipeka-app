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
        Schema::create('eksemplar',function(Blueprint $table){
            $table->id();
            $table->string('id_buku');
            $table->string('id_eksemplar');
            $table->enum('status_eksemplar',['tersedia','dipinjam','hilang']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eksemplar');
    }
};
