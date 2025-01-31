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
        Schema::create('relasibukuperpustakaanrizki', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('IDBuku');
            $table->integer('IDPerpustakaan');
            $table->integer('JumlahBuku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relasibukuperpustakaanrizki');
    }
};
