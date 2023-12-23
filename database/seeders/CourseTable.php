<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i <= 10; $i++) {
        //     DB::table('beritas')->insert([
        //         'user_id' => 1,
        //         'judul' => 'Judul Konten ' . $i,
        //         'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ' . $i,
        //         'cover' => 'featured.png',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        for ($i = 0; $i < 10; $i++) {
            DB::table('pelatihans')->insert([
                'kategori_pelatihan_id' => rand(1, 5), // Assuming you have 5 kategori_pelatihans
                'user_id' => '1', // Assuming you have 10 users
                'nama_pelatihan' => 'Nama Pelatihan ' . $i,
                'nama_penyelenggara' => 'Nama Peyelenggara ' . $i,
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ' . $i,
                'dokumentasi_pelatihan' => 'featured.png',
                'poster' => 'featured.png',
                'max_peserta' => rand(20, 100),
                'status' => rand(0, 1), // Assuming 0 or 1 for status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
