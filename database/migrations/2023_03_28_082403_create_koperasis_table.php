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
        Schema::create('koperasis', function (Blueprint $table) {
            $table->id();
            $table->integer("no_registrasi");
            $table->string("nama_koperasi");
            $table->string("alamat_koperasi");
            $table->string("notelepon_koperasi");
            $table->string("email_koperasi");
            $table->string("jenis_produk");
            $table->integer("jumlah_anggota");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koperasis');
    }
};
