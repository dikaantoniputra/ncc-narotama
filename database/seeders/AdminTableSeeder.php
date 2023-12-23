<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Ganti dengan password yang diinginkan
            'phone' => '082316311231231',
            'role' => 'admin',
            'status' => '0',
        ]);

         Admin::create([
            'user_id' => $user->id,
        ]);

        Mahasiswa::create([
            'user_id' => $user->id,
        ]);

    }
}
