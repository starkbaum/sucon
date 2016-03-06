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
            $table->bigIncrements('id');                        //caused by the possibility of expansion - primary key
            $table->string('name', 100);
            $table->string('path', 500);                        //file-path can be very long
            $table->string('author', 100)->nullable();
            $table->decimal('size',10,2)->default(0);
            $table->string('extension');
            $table->boolean('is_accepted')->defaul(false);
            $table->unsignedInteger('courseId')->nullable();    // foreign key
            $table->unsignedInteger('snippetId')->nullable();   // foreign key
            $table->unsignedInteger('languageId')->nullable();  // foreign key
            $table->timestamps();                               //adds created_at and updated_at columns
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
