<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerja_memiliki_kontrak', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi_dikontrak');
            $table->date('tanggal_mulai_kontrak');
            $table->string('email')->nullable();
            $table->string('pt')->nullable();
            $table->integer('lama_kontrak')->nullable();
            $table->unsignedBigInteger('upah_kontrak')->nullable(); // Menggunakan unsignedBigInteger untuk upah
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
        Schema::dropIfExists('pekerja_memiliki_kontrak');
    }
};
