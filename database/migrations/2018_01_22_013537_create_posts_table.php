<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('content');
            $table->boolean('status')->default(true);
            $table->integer('threadsId')->unsigned();
            $table->integer('usersId')->unsigned();
            $table->timestamps();

            $table->foreign('threadsId')->references('id')->on('threads');
            $table->foreign('usersId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
