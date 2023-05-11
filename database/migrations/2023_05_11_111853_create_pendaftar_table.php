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
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->comment('tabel pendaftar: revisi untuk tabel-tabel sebelumnya (user dan berkas)');
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('no_telp', 15);
            $table->unsignedBigInteger('jabatan')->index('user_jabatan_foreign');
            $table->string('email')->unique('user_email_unique');
            $table->string('password');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('ktp');
            $table->string('ktm');
            $table->string('s_pernyataan');
            $table->date('tanggal_lahir');
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
        Schema::dropIfExists('pendaftar');
    }
};
