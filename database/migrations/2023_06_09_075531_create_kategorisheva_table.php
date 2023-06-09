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
        Schema::create('kategorisheva', function (Blueprint $table) {
            $table->bigIncrements('IDKategori')->unique();
            $table->unsignedBigInteger('IDKategoriBuku')->index()->nullable();
            $table->string('NamaKategori');
            $table->timestamps();

            $table->foreign('IDKategoriBuku')->references('IDBuku')->on('bukusheva')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorisheva');
    }
};
