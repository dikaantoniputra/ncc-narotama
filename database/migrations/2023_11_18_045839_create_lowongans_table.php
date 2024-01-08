<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_lowongan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('logo');
            $table->string('nama_perusahaan');
            $table->string('title_pekerjaan');
            $table->text('deskripsi_pekerjaan');
            $table->text('syarat_pekerjaan');
            $table->text('kompetensi_pekerjaan');
            $table->string('kota');
            $table->integer('status')->default(0); // Ganti tipe data menjadi enum;
            $table->foreign('kategori_lowongan_id')->references('id')->on('kategori_lowongans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('lowongans');
    }
}
