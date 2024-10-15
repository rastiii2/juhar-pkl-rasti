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
        Schema::create('dudi', function (Blueprint $table) {
            $table->integer('id_dudi')->primary()->autoIncrement();
            $table->string('nama_dudi', 25 );
            $table->string('alamat_dudi', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dudi');
    }
};
