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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->integer('id_kegiatan')->primary()->autoIncrement();
            $table->integer('id_siswa');
            $table->foreign('id_siswa')
                  ->references('id_siswa')
                  ->on('siswa')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->date('tanggal_kegiatan');
            $table->string('nama_kegiatan', 25);
            $table->text('ringkasan_kegiatan');
            $table->string('foto', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
