<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordSnippetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_snippet', function (Blueprint $table) {
            $table->unsignedBigInteger('keyword_id')->index();
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
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
        Schema::drop('keyword_snippet');
    }
}
