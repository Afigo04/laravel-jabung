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
        Schema::create('sk_solar_docs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_sk')->nullable(value: true)->unique();
            $table->string("nama", 100)->nullable(false);
            $table->string("ttl", 100)->nullable(false);
            $table->string("jenis_kelamin", 100)->nullable(false);
            $table->string("agama", 100)->nullable(false);
            $table->string("pekerjaan", 100)->nullable(false);
            $table->string("status_kawin", 100)->nullable(false);
            $table->string("nik", 100)->nullable(false);
            $table->string("keperluan", 100)->nullable(false);
            $table->string("alamat", 100)->nullable(false);
            $table->string("tanggal_surat", 100)->nullable(true);
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
        Schema::dropIfExists('sk_solar_docs');
    }
};
