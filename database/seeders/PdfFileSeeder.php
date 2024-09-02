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
            'name' => "Surat Keterangan Domisili",
            'path' => "dummyDocs1.pdf",
            'pdf_category_id' => 2
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Surat Keterangan Kehilangan",
            'path' => "dummyDocs2.pdf",
            'pdf_category_id' => 2
        ]);
        DB::table('pdf_files')->insert([
            'name' => "Surat Keterangan Usaha",
            'path' => "dummyDocs3.pdf",
            'pdf_category_id' => 2
        ]);
    }
}
