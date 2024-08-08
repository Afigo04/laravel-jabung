<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PdfFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pendapatan Desa
        DB::table('pdf_files')->insert([
            'name' => "Laporan APBD Tahun 2023",
            'path' => "dummyDocs1.pdf",
            'pdf_category_id' => 1
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Laporan APBD Tahun 2024",
            'path' => "dummyDocs2.pdf",
            'pdf_category_id' => 1
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Laporan APBD Tahun 2022",
            'path' => "dummyDocs3.pdf",
            'pdf_category_id' => 1
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Laporan APBD Tahun 2021",
            'path' => "dummyDocs4.pdf",
            'pdf_category_id' => 1
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Dispensasi",
            'path' => "dummyDocs5.pdf",
            'pdf_category_id' => 2
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Makelar",
            'path' => "dummyDocs6.pdf",
            'pdf_category_id' => 2
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Tender",
            'path' => "dummyDocs7.pdf",
            'pdf_category_id' => 2
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Sak karepmu",
            'path' => "dummyDocs8.pdf",
            'pdf_category_id' => 2
        ]);
    }
}
