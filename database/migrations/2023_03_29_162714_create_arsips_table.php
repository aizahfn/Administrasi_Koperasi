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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("no_dokumen");
            $table->char("nama_dokumen");
            $table->char("kategori_dokumen");
            $table->date("tanggal_dokumen");
            $table->char("isi_dokumen");
            $table->char("sumber_dokumen");
            $table->char("penerima_dokumen");
            $table->char("status_dokumen");
            $table->char("aksesibilitas_dokumen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
