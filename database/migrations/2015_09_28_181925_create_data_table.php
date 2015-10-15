<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('dataId');      //caused by the possibility of expansion - primary key
            $table->string('name', 100);
            $table->string('path', 500);        //file-path can be very long
            $table->string('author', 100)->nullable();
            $table->decimal('size',10,2)->default(0);
            $table->integer('views')->default(0);
            $table->timestamps(); //adds created_at and updated_at columns
            $table->unsignedInteger('languageId');         // foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data');
    }
}
