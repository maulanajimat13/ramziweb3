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
        Schema::create('pemilihs', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NIK');
            $table->string('NomorHP');
            $table->string('Kampung');
            $table->string('Rt');
            $table->string('Rw');
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->string('TPS');
            $table->string('Nama_Relawan');
            $table->string('Koordinator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilihs');
    }
};
