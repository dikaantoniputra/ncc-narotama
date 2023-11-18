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
            $table->unsignedBigInteger('admin_id');
            $table->string('logo');
            $table->string('nama_perusahaan');
            $table->string('title_pekerjaan');
            $table->string('deskripsi_pekerjaan');
            $table->string('syarat_pekerjaan');
            $table->string('kompetensi_pekerjaan');
            $table->integer('status');
            $table->foreign('kategori_lowongan_id')->references('id')->on('kategori_lowongans')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
