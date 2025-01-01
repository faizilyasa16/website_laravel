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
        Schema::create('pendaftar_ke_elitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi_dilamar');
            $table->timestamp('tanggal_submit')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('email');
            $table->string('no_telepon')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tinggal')->nullable();
            $table->string('jabatan_sebelumnya')->nullable();
            $table->integer('lama_pengalaman')->nullable();
            $table->decimal('gaji_diharapkan', 15, 2)->nullable();
            $table->string('cv');
            $table->string('linkedin')->nullable();
            $table->string('status');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_ke_elitra');
    }
};
