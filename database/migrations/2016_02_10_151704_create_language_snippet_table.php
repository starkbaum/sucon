<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageSnippetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_snippet', function (Blueprint $table) {
            $table->unsignedInteger('language_id')->index();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->unsignedInteger('snippet_id')->index();
            $table->foreign('snippet_id')->references('id')->on('snippets')->onDelete('cascade');
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
        Schema::drop('language_snippet');
    }
}
