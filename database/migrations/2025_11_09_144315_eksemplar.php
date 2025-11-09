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
            $table->id('id_eksemplar')->unique();
            $table->index('id_eksemplar');
            $table->string('id_koleksi');
            $table->enum('status',['ada','hilang','rusak']);
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
