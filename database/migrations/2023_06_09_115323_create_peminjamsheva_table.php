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
        Schema::create('peminjamsheva', function (Blueprint $table) {
            $table->bigIncrements('IDPeminjam')->unique();
            $table->unsignedBigInteger('IDPeminjamBuku')->index()->nullable();
            $table->string('NamaPeminjam');
            $table->timestamps();

            $table->foreign('IDPeminjamBuku')->references('IDBuku')->on('bukusheva')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamsheva');
    }
};
