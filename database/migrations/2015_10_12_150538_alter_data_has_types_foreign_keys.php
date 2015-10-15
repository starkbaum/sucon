<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasTypesForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_types', function (Blueprint $table) {
            $table->foreign('dataId')->references('dataId')->on('data');
        });
        Schema::table('data_has_types', function (Blueprint $table) {
            $table->foreign('typeId')->references('typeId')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_types', function (Blueprint $table) {
            $table->dropForeign('data_has_types_dataId_foreign');
            $table->dropForeign('data_has_types_typeId_foreign');
        });
    }
}
