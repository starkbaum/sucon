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
        Schema::create('data_has_customers', function (Blueprint $table) {
            $table->bigInteger('d_id');  // primary key & foreign key
            $table->integer('cus_id');   // primary key & foreign key


            //$table->primary(['d_id', 'cus_id']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_has_customers');
    }
}
