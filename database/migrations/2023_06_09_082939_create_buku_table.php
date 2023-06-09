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
        Schema::create('bukurizki', function (Blueprint $table) {
            $table->integer('id_buku', true);
            $table->string('judul', 30);
            $table->string('penulis', 30);
            $table->string('penerbit', 30);
            $table->date('thn_terbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukuRizki');
    }
};
