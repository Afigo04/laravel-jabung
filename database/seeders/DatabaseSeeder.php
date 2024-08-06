<?php

namespace Database\Seeders;

use App\Models\News;
use Database\Factories\NewsFactory;
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
            // FinanceCategorySeeder::class,
            // PdfCategorySeeder::class,
            // FinanceSeeder::class
            PdfFileSeeder::class
        ]);

        // News::factory()->count(10)->create();
    }
}
