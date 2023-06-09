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
        Schema::create('kategoririzki', function (Blueprint $table) {
            $table->integer('IDKategori', true);
            $table->string('NamaKategori',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoririzki');
    }
};
