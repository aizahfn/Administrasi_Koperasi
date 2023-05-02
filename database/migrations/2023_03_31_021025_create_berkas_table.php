<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('ktp');
            $table->string('ktm');
            $table->string('s_pernyataan');
            $table->timestamps();
            $table->bigInteger('id_user')->unsigned()->nullable();

            $table->foreign('id_user')
                  ->references('id')
                  ->on('user')
                  ->onDelete('set null');

            $table->index('id_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
