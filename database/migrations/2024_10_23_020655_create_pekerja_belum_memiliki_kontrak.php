<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerja_belum_memiliki_kontrak', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi_keahlian');
            $table->date('tanggal_masuk');
            $table->string('email')->nullable();
            $table->string('cv')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekerja_belum_memiliki_kontrak');
    }
};
