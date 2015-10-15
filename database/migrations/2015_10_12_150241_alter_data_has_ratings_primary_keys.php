<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasRatingsPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_ratings', function (Blueprint $table) {
            $table->primary(['dataId', 'ratingId']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_ratings', function (Blueprint $table) {
            $table->dropPrimary(['dataId', 'ratingId']);
        });
    }
}
