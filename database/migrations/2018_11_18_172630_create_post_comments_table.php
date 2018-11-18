<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('post_id');
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('post_comments');
    }
}
