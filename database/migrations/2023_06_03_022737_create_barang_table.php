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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('NamaBarang');
            $table->string('DeskripsiBarang')->nullable();
            $table->integer('HargaBarang');
            $table->foreignId('satuan_id')->constrained();
            $table->timestamps();
            $table->string('KodeBarang')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};