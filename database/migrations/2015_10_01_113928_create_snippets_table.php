<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snippets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //TODO make slug not nullable
            $table->string('slug');
            $table->text('description')->nullable();
            //TODO maybe not nullable
            $table->string('path_to_material')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('language_id')->nullable();
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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('snippets');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
