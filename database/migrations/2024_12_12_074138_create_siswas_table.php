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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->nullable(false)->unique();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(true)->unique();
            $table->string('password')->nullable(true);
            $table->enum('jenis_kelamin',['L','P'])->nullable(false);
            // Ubah id_kelas menjadi nullable
            $table->unsignedBigInteger('id_kelas')->nullable();
            
            // Foreign key dengan ON DELETE SET NULL
            $table->foreign('id_kelas')
                ->references('id')->on('kelas')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
