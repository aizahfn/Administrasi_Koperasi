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
        Schema::create('bukusheva', function (Blueprint $table) {
            $table->bigIncrements('IDBuku')->unique();
            $table->string('Judul');
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->year('TahunTerbit');
            $table->integer('JumlahStok');
            $table->integer('DendaBuku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukusheva');
    }
};
