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
        Schema::table('pendaftar_ke_elitra', function (Blueprint $table) {
            // Menambahkan kolom baru
            $table->string('jenis_kelamin')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tinggal')->nullable();
            $table->string('jabatan_sebelumnya')->nullable(); // Kolom untuk jabatan sebelumnya
            $table->integer('lama_pengalaman')->nullable(); // Kolom untuk lama pengalaman dalam tahun atau bulan
            $table->decimal('gaji_diharapkan', 15, 2)->nullable();
            $table->string('linkedin')->nullable();

            // Menambahkan kolom created_at dan updated_at di akhir
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftar_ke_elitra', function (Blueprint $table) {
            if (Schema::hasColumn('pendaftar_ke_elitra', 'jenis_kelamin')) {
                $table->dropColumn('jenis_kelamin');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'tanggal_lahir')) {
                $table->dropColumn('tanggal_lahir');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'no_telepon')) {
                $table->dropColumn('no_telepon');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'alamat_ktp')) {
                $table->dropColumn('alamat_ktp');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'alamat_tinggal')) {
                $table->dropColumn('alamat_tinggal');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'jabatan_sebelumnya')) {
                $table->dropColumn('jabatan_sebelumnya');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'lama_pengalaman')) {
                $table->dropColumn('lama_pengalaman');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'gaji_diharapkan')) {
                $table->dropColumn('gaji_diharapkan');
            }
            if (Schema::hasColumn('pendaftar_ke_elitra', 'linkedin')) {
                $table->dropColumn('linkedin');
            }

            // Menghapus kolom created_at dan updated_at
            $table->dropTimestamps();
        });
    }
};
