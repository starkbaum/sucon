<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->foreign('languageId')->references('id')->on('languages');
            $table->foreign('courseId')->references('id')->on('courses');
            $table->foreign('snippetId')->references('id')->on('snippets');
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
       });
    }
}
