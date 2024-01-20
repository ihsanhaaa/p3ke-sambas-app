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
        Schema::create('individus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluarga_id');
            $table->string('nama');
            $table->string('nik', 16)->nullable();
            $table->string('perbaikan_nik', 16)->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->default('Laki-laki');
            $table->enum('hubungan_keluarga', ['Kepala Keluarga', 'Istri', 'Anak', 'Lainnya'])->default('Lainnya');
            $table->string('verifikasi')->nullable();
            $table->text('foto')->nullable();
            $table->integer('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individus');
    }
};
