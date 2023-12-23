<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacancyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('lowongans')->insert([
                'kategori_lowongan_id' => rand(1, 5), // Assuming you have 5 kategori_pelatihans
                'user_id' => '1', // Assuming you have 10 users
                'logo' => 'featured.png',
                'nama_perusahaan' => 'Nama Perusahaan ' . $i,
                'title_pekerjaan' => 'Title Pekerjaan ' . $i,
                'deskripsi_pekerjaan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ' . $i,
                'syarat_pekerjaan' => 'sma',
                'kompetensi_pekerjaan' => 'niat kerja',
                'kota' => 'surabaya',
                'status' => rand(0, 1), // Assuming 0 or 1 for status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
