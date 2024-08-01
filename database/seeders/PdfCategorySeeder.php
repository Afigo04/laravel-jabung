<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PdfCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pdf_categories')->insert([
            'name' => "Pendapatan"
        ]);
        DB::table('pdf_categories')->insert([
            'name' => "Penyuratan"
        ]);
    }
}
