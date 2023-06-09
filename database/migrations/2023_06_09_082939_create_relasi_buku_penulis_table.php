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
        Schema::create('relasi_buku_penulis_rizki', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_penulis')->nullable()->index('penulis_buku');
            $table->integer('id_buku')->nullable()->index('buku_penulis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relasi_buku_penulis_rizki');
    }
};
