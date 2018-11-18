<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_factors', function (Blueprint $table) {
            $table->integer('book_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->integer('factor_id');
            $table->foreign('factor_id')->references('id')->on('factors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_factors');
    }
}
