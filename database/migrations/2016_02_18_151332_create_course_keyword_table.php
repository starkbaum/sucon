<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_keyword', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->index();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsignedBigInteger('keyword_id')->index();
            $table->foreign('keyword_id')->references('id')->on('keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_keyword');
    }
}
