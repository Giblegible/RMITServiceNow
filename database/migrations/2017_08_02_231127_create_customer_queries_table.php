<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_queries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serviceArea');
            $table->string('workArea');
            $table->string('problemDescription');
            $table->string('problemStatus');
            $table->string('problemSeverity');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_queries');
    }
}
