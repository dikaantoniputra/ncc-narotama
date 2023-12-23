<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            AdminTableSeeder::class,
            MahasiswaTableSeeder::class,
            BeritaTable::class,
            CategoryCouserTable::class,
            CourseTable::class,
            CategoryVacancy::class,
            VacancyTable::class,
        ]);
    }
}
