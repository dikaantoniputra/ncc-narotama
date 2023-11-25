<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
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
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Ganti dengan password yang diinginkan
            'phone' => '082316311231231',
            'role' => 'admin',
            'status' => '0',
        ]);
    }
}
