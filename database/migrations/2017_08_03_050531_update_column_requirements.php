<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_queries', function (Blueprint $table) {
            $table->string('problemStatus')->nullable()->default(NULL)->change();
            $table->string('problemSeverity')->nullable()->default(NULL)->change();;
            $table->string('comments')->nullable()->default(NULL)->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_queries', function (Blueprint $table) {
            //
        });
    }
}
