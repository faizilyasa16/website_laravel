<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsFromUserTable extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('status');  // Hapus kolom 'status'
            $table->dropColumn('foto');    // Hapus kolom 'foto'
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('status')->nullable(); // Kembalikan kolom 'status'
            $table->string('foto')->nullable();   // Kembalikan kolom 'foto'
        });
    }
}
