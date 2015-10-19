<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasCommentsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_comments', function (Blueprint $table) {
            $table->foreign('dataId')->references('id')->on('data');
        });
        Schema::table('data_has_comments', function (Blueprint $table) {
            $table->foreign('commentId')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_comments', function (Blueprint $table) {
            $table->dropForeign('data_has_comments_dataId_foreign');
            $table->dropForeign('data_has_comments_commentId_foreign');
        });
    }
}
