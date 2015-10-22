<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHasRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_has_ratings', function (Blueprint $table) {
            $table->unsignedBigInteger('dataId');  // primary key & foreign key
            $table->unsignedInteger('ratingId');     // primary key & foreign key

           // $table->primary(['d_id', 'r_id']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_has_ratings');
    }
}
