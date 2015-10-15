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
        Schema::create('data_has_keywords', function (Blueprint $table) {
            $table->unsignedbigInteger('dataId');  // primary key & foreign key
            $table->unsignedbigInteger('keywordId');  // primary key & foreign key
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
