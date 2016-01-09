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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');   // primary key
            $table->string('name', 100);
            $table->string('city', 100);
            $table->string('zipCode', 30);
            $table->string('street',100);
            $table->string('email', 100);
            $table->string('phoneNo', 100);
            $table->unsignedInteger('snippetId')->nullable();   // foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
