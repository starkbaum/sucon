<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataApprovedForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_approved', function (Blueprint $table) {
            $table->foreign('dataId')->references('dataId')->on('data');
        });
        Schema::table('data_approved', function (Blueprint $table) {
            $table->foreign('roleId')->references('roleId')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_approved', function (Blueprint $table) {
            $table->dropForeign('data_approved_dataId_foreign');
            $table->dropForeign('data_approved_roleId_foreign');
        });
    }
}
