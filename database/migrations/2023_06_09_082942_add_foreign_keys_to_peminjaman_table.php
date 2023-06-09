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
        Schema::table('peminjamanrizki', function (Blueprint $table) {
            $table->foreign(['IDBuku'], 'peminjaman_buku')->references(['id_buku'])->on('bukurizki');
            $table->foreign(['IDPeminjam'], 'peminjaman_peminjam')->references(['IDPeminjam'])->on('peminjamrizki');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjamanrizki', function (Blueprint $table) {
            $table->dropForeign('peminjaman_buku');
            $table->dropForeign('peminjaman_peminjam');
        });
    }
};
