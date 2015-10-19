<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasKeywordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->foreign('dataId')->references('id')->on('data');
        });
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->foreign('keywordId')->references('id')->on('keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->dropForeign('data_has_keywords_dataId_foreign');
            $table->dropForeign('data_has_keywords_keywordId_foreign');
        });
    }
}
