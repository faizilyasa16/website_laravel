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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', [0,1,2])->default(0); //disini 0 untuk admin 1 untuk superadmin dan 2 untuk customer
            $table->boolean('status');// fungsi ini adalah jika 0 user belom aktif/di non aktifkan kalo 1 user dapat mengakses dan login ke sistem
            $table->string('password');
            $table->string('hp', 15);
            $table->string('foto')->nullable();//nullable disini biar foto bisa di kosongkan dan tidak wajib di isi
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
};
