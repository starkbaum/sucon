<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasKeywordsAddPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->primary(['d_id', 'k_id']);      // set primary key
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
            $table->dropPrimary(['d_id', 'k_id']);
        });
    }
}
