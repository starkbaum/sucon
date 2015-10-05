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
            $table->bigIncrements('d_id');      //caused by the possibility of expansion - primary key
            $table->string('d_name', 100);
            $table->string('path', 500);        //file-path can be very long
            $table->string('d_author', 100);
            $table->decimal('d_size',10,2);
            $table->integer('d_views');
            $table->timestamps(); //adds created_at and updated_at columns
            $table->timestamp('d_last_view');
            $table->unsignedInteger('l_id');         // foreign key
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
