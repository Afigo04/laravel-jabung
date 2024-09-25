<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sk_kehilangan_docs')->insert([
            'nama_lengkap' => 'Patrick Star',
            'nik' => '3576447103910003',
            'nkk' => '3172010502090982',
            'ttl' => 'Ponorogo, 30 Februari 2004',
            'gender' => "Laki-laki",
            'kewarganegaraan' => "Indonesia",
            "pekerjaan" => "Serabutan",
            "agama" => "Islam",
            "alamat" => "Desa wringinanom kecamatan sambit kabupaten ponorogo",
            "tanggal_hilang" => "03 Februari 2024",
            "barang_hilang" => "Koper",
            "waktu_hilang" => "12:00",
            "tempat_hilang" => "Desa Wringinanom",
            "keperluan" => "Mengajukan surat kehilangan",
            "no_whatsapp" => "083848227945"
        ]);
    }
}
