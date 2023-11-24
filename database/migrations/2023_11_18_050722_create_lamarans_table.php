<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lowongan_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('dokumen_riwayat');
            $table->string('dokumen_lamaran');
            $table->text('dokumen_transkrip');
            $table->string('dokumentasi_tambahan');
            $table->integer('status')->default(0); // Ganti tipe data menjadi enum
            $table->foreign('lowongan_id')->references('id')->on('lowongans')->onDelete('cascade');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('cascade');
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
        Schema::dropIfExists('lamarans');
    }
}
