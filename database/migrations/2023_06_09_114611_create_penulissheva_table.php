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
        Schema::create('penulissheva', function (Blueprint $table) {
            $table->bigIncrements('IDPenulis')->unique();
            $table->unsignedBigInteger('IDPenulisBuku')->index()->nullable();
            $table->string('NamaPenulis');
            $table->timestamps();

            $table->foreign('IDPenulisBuku')->references('IDBuku')->on('bukusheva')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penulissheva');
    }
};
