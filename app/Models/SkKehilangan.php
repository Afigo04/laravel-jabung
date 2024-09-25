<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkKehilangan extends Model
{
    use HasFactory;

    protected $table = "sk_kehilangan_docs";
    protected $primaryKey = 'id';

    protected $fillable = [
        "nomor_sk",
        "nama_lengkap",
        "nik",
        "nkk",
        "ttl",
        "gender",
        "kewarganegaraan",
        "pekerjaan",
        "agama",
        "alamat",
        "barang_hilang",
        "tanggal_hilang",
        "waktu_hilang",
        "tempat_hilang",
        "keperluan",
        "no_whatsapp",
        "status",
    ];
}
