<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataApprovedPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_approved', function (Blueprint $table) {
            $table->primary(['d_id', 'role_id']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_approved', function (Blueprint $table) {
            $table->primary(['d_id', 'role_id']);
        });
    }
}
