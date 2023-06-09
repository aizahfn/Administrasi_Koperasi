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
        Schema::table('relasi_buku_penulis_rizki', function (Blueprint $table) {
            $table->foreign(['id_buku'], 'buku_penulis')->references(['id_buku'])->on('bukurizki');
            $table->foreign(['id_penulis'], 'penulis_buku')->references(['id_penulis'])->on('penulisrizki');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relasi_buku_penulis_rizki', function (Blueprint $table) {
            $table->dropForeign('buku_penulis');
            $table->dropForeign('penulis_buku');
        });
    }
};
