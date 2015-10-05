<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('cus_id');   // primary key
            $table->string('cus_name', 100);
            $table->string('cus_city', 100);
            $table->string('cus_zipCode', 30);
            $table->string('cus_street',100);
            $table->string('cus_mail', 100);
            $table->string('cus_phoneNo', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer');
    }
}
