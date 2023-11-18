<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_pelatihan_id');
            $table->unsignedBigInteger('admin_id'); // Tambahkan kolom admin_id sebagai foreign key
            $table->string('nama_pelatihan');
            $table->string('nama_penyelenggara');
            $table->text('deskripsi');
            $table->string('dokumentasi_pelatihan');
            $table->string('poster');
            $table->integer('max_peserta');
            $table->integer('status'); // Ganti tipe data menjadi enum
            $table->timestamps();

            // Tambahkan foreign key untuk admin_id
            $table->foreign('kategori_pelatihan_id')->references('id')->on('kategori_pelatihans');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelatihans');
    }
}
