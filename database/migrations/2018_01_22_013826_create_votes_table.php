<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('up_count');
            $table->integer('down_count');
            $table->integer('postsId')->unsigned();
            $table->integer('threadsId')->unsigned();
            $table->timestamps();

            $table->foreign('postsId')->references('id')->on('posts');
            $table->foreign('threadsId')->references('id')->on('threads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
