<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datalowongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lowongan');
            $table->string('image');
            $table->date('tanggal_lowongan');
            $table->integer('jumlah_lowongan');
            $table->text('deskripsi_lowongan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datalowongan');
    }
};
