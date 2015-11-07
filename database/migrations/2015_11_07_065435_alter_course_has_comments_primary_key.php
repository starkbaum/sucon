<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCourseHasCommentsPrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_has_comments', function (Blueprint $table) {
            $table->primary(['courseId', 'commentId']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_has_comments', function (Blueprint $table) {
            $table->dropPrimary(['courseId', 'commentId']);
        });
    }
}