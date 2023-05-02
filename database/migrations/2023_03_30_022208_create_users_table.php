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
       Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255);
            $table->string('no_telp', 15);
            $table->unsignedBigInteger('jabatan');
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->text('alamat');
            $table->string('jenis_kelamin', 255);
            $table->date('tanggal_lahir');
            $table->timestamps();

            $table->foreign('jabatan')->references('id')->on('datalowongan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
