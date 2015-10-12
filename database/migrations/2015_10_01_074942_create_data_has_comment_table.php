<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHasCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_has_comments', function (Blueprint $table) {
            $table->bigInteger('d_id');          // primary key & foreign key
            $table->bigInteger('com_id');        // primary key & foreign key


            //$table->primary(['d_id', 'com_id']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_has_comments');
    }
}
