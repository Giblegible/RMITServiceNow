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
            $table->string('hardwareType')->nullable();
            $table->string('softwareType')->nullable();
            $table->string('problemDescription');
            $table->string('problemStatus')->default('New');
            $table->string('problemSeverity')->nullable();
            $table->string('comments')->nullable();
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
