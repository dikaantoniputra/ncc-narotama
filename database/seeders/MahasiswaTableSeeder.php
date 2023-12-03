<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswas = Mahasiswa::create ([
            'username' => '04321028',
            'password' => Hash::make('password'),
            'nama' => 'Bagus Adianto',
            'email' => 'bagusadianto5@gmail.com',
            'telp' => '082312708762',
        ]);
    }
}
