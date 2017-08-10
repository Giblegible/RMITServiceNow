<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned()->change();
            $table->integer('ticket_id')->unsigned()->change();

            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');

            $table->foreign('ticket_id')
                ->references('id')->on('customer_queries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
        });
    }
}
