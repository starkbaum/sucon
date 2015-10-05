<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHasCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_has_customer', function (Blueprint $table) {
            $table->bigIncrements('d_id');  // primary key & foreign key
            $table->increments('cus_id');   // primary key & foreign key


            $table->primary('d_id');      // set primary key
            $table->primary('cus_id');      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_has_customer');
    }
}
