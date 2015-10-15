<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataHasRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_has_ratings', function (Blueprint $table) {
            $table->bigInteger('dataId');  // primary key & foreign key
            $table->integer('ratingId');     // primary key & foreign key

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
