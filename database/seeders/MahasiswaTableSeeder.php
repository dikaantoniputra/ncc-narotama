<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'siswa',
            'username' => 'siswa',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password'), // Ganti dengan password yang diinginkan
            'phone' => '082316311231231',
            'role' => 'mahasiswa',
            'status' => '0',
        ]);

        Mahasiswa::create([
            'user_id' => $user->id,
        ]);
    }
}
