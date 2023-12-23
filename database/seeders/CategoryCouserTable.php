<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCouserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 6; $i++) {
            DB::table('kategori_pelatihans')->insert([ 
                'kategori' => 'kategori Konten ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
