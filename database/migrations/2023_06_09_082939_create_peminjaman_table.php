<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Kharisma Rizki Wijanarko_4611421124
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('IDPeminjaman', true);
            $table->integer('IDBuku')->index('peminjaman_buku');
            $table->integer('IDPeminjam')->index('peminjaman_peminjam');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalPengembalian');
            $table->integer('TotalDenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
