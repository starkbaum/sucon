<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataAddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->foreign('l_id')->references('l_id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->dropForeign('l_id');
        });
    }
}
