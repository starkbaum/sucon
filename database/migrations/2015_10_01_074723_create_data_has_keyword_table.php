<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHasKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keyword', function (Blueprint $table) {
            $table->unsignedbigInteger('data_id');  // primary key & foreign key
            $table->foreign('data_id')->references('id')->on('data')->onDelete('cascade');

            $table->unsignedbigInteger('keyword_id');  // primary key & foreign key
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');

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
        Schema::drop('data_has_keywords');
    }
}
