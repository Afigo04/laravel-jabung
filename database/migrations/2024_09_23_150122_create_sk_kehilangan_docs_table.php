<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sk_kehilangan_docs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_sk')->nullable(value: true)->unique();
            $table->string("nama_lengkap")->nullable(false);
            $table->string("nik")->nullable(false);
            $table->string("nkk")->nullable(false);
            $table->string("ttl")->nullable(false);
            $table->string("gender")->nullable(false);
            $table->string("kewarganegaraan")->nullable(false);
            $table->string("pekerjaan")->nullable(false);
            $table->string("agama")->nullable(false);
            $table->string("alamat")->nullable(false);
            $table->string("tanggal_hilang")->nullable(false);
            $table->string("barang_hilang")->nullable(false);
            $table->string("waktu_hilang")->nullable(false);
            $table->string("tempat_hilang")->nullable(false);
            $table->string("keperluan")->nullable(false);
            $table->string("no_whatsapp")->nullable(true);
            $table->boolean("status")->nullable(false)->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_kehilangan_docs');
    }
};
