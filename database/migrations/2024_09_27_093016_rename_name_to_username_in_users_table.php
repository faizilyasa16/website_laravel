<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameToUsernameInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->renameColumn('nama', 'username');
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->renameColumn('username', 'nama');
        });
    }
}
