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
        Schema::create('penerima_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('individu_id');
            $table->foreignId('program_id');
            $table->foreignId('user_id');
            $table->enum('isi', ['Ya', 'Tidak'])->default('Tidak');
            $table->date('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_programs');
    }
};
