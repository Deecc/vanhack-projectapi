<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('crud_user');
            $table->boolean('crud_job');
            $table->boolean('crud_company');
            $table->boolean('crud_role');
            $table->boolean('crud_category');
            $table->boolean('crud_forum_as_user');
            $table->boolean('crud_forum_as_admin');
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
        Schema::dropIfExists('permissions');
    }
}

