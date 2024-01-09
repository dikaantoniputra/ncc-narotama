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
            $table->unsignedBigInteger('user_id'); // Tambahkan kolom admin_id sebagai foreign key
            $table->string('nama_pelatihan');
            $table->string('nama_penyelenggara');
            $table->text('deskripsi');
            $table->string('dokumentasi_pelatihan')->nullable();
            $table->string('poster');
            $table->integer('max_peserta');
            $table->integer('status')->default(0); // Ganti tipe data menjadi enum
            $table->timestamps();

            // Tambahkan foreign key untuk admin_id
            // $table->foreign('kategori_pelatihan_id')->references('id')->on('kategori_pelatihans');
            $table->foreign('user_id')->references('id')->on('users');
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
