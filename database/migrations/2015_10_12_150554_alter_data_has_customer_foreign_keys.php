<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasCustomerForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_customers', function (Blueprint $table) {
            $table->foreign('dataId')->references('dataId')->on('data');
        });
        Schema::table('data_has_customers', function (Blueprint $table) {
            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_customers', function (Blueprint $table) {
            $table->dropForeign('data_has_customers_dataId_foreign');
            $table->dropForeign('data_has_customers_customerId_foreign');
        });
    }
}
