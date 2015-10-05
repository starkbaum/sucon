<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataApprovedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_approved', function (Blueprint $table) {
            $table->bigIncrements('d_id');  // primary key & foreign key
            $table->integer('r_id');        // primary key & foreign key


            $table->primary(['d_id', 'r_id']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_approved');
    }
}