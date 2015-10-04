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
        Schema::create('data_has_keyword', function (Blueprint $table) {
            $table->bigIncrements('d_id');  // primary key & foreign key
            $table->bigIncrements('k_id');  // primary key & foreign key


            $table->primary('d_id');      // set primary key
            $table->primary('k_id');      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_has_keyword');
    }
}
