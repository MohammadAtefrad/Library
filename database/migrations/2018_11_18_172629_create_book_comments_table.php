<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('book_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->integer('reference_comment_id')->nullable();
            $table->integer('comment_status_id');
            $table->foreign('comment_status_id')->references('id')->on('comment_statuses');
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
        Schema::dropIfExists('book_comments');
    }
}
