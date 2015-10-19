<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasRatingsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_ratings', function (Blueprint $table) {
            $table->foreign('dataId')->references('id')->on('data');
            $table->foreign('ratingId')->references('id')->on('ratings');
        });
        //Schema::table('data_has_ratings', function (Blueprint $table) {
        //    $table->foreign('ratingId')->references('ratingId')->on('ratings');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_ratings', function (Blueprint $table) {
            $table->dropForeign('data_has_ratings_dataId_foreign');
            $table->dropForeign('data_has_ratings_ratingId_foreign');
        });
    }
}
