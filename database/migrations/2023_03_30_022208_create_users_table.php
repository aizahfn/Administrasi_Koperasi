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
            $table->foreignId('id_berkas')->constrained('berkas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('role');
            $table->string('nama_lengkap');
            $table->bigInteger('no_telp');
            $table->string('jabatan');
            $table->string('email');
            $table->string('password');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->timestamps();
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
