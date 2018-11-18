<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('book_category_id');
            $table->foreign('book_category_id')->references('id')->on('book_categories');
            $table->string('publisher')->nullable();
            $table->string('autor')->nullable();
            $table->text('description')->nullable();
            $table->date('published_date')->nullable();
            $table->integer('penalty_value')->nullable();
            $table->integer('book_status_id');
            $table->foreign('book_status_id')->references('id')->on('book_statuses');
            $table->date('borrowed_date')->nullable();
            $table->date('return_deadline_date')->nullable();
            $table->date('return_date')->nullable();
            $table->integer('reborrow_count')->nullable();
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
        Schema::dropIfExists('books');
    }
}
