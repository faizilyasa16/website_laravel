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
        Schema::create('list_perusahaan_terdaftar', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('jumlah_staff_bekerja_sama');
            $table->date('tanggal_terdaftar');
            $table->string('tanggal_berakhir')->nullable();
            $table->string('email_perusahaan')->nullable();
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
        Schema::dropIfExists('list_perusahaan_terdaftar');
    }
};
