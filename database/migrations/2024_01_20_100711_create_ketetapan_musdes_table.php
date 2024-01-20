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
        Schema::create('ketetapan_musdes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('individu_id');
            $table->enum('status', ['Ya', 'Tidak'])->default('Tidak');
            $table->date('tangga_ditetapkan');
            $table->date('tahun');
            $table->string('nama_pejabat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketetapan_musdes');
    }
};
