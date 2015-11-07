<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCourseHasCommentsForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_has_comments', function (Blueprint $table) {
            $table->foreign('courseId')->references('id')->on('courses');
        });
        Schema::table('course_has_comments', function (Blueprint $table) {
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
        Schema::table('course_has_comments', function (Blueprint $table) {
            $table->dropForeign('course_has_comments_courseId_foreign');
            $table->dropForeign('course_has_comments_commentId_foreign');
        });
    }
}