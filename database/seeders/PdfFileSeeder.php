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
            'path' => "Template PROYEK AKHIR KECERDASAN BUATAN.pdf",
            'pdf_category_id' => 1
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Laporan APBD Tahun 2024",
            'path' => "PROYEK AKHIR kecerdasan buatan.pdf",
            'pdf_category_id' => 1
        ]);
    }
}
