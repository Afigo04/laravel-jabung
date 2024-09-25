<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            FinanceCategorySeeder::class,
            PdfCategorySeeder::class,
            FinanceSeeder::class,
            PdfFileSeeder::class,
            GalerySeeder::class,
            NewsSeeder::class,
            PendudukSeeder::class,
            UserSeeder::class,
        ]);
    }
}
