<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->integer('article_category_id');
            $table->foreign('article_category_id')->references('id')->on('article_categories');
            $table->string('publisher')->nullable();
            $table->string('autor')->nullable();
            $table->text('abstract')->nullable();
            $table->date('published_date')->nullable();
            $table->string('keywords')->nullable();
            $table->integer('article_status_id');
            $table->foreign('article_status_id')->references('id')->on('article_statuses');
            $table->text('download_link')->nullable();
            $table->integer('download_count')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
