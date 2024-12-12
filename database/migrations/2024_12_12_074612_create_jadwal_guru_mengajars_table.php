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
        Schema::create('jadwal_guru_mengajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_guru_mata_pelajaran')->constrained('guru_mata_pelajarans', 'id')->onDelete('cascade');
            $table->foreignId('id_kelas')->constrained('kelas', 'id')->onDelete('cascade');
            $table->foreignId('id_kurikulum')->constrained('kurikulums', 'id')->onDelete('cascade');
            $table->string('hari', 20);
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_guru_mengajars');
    }
};
