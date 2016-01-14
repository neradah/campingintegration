<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventProductQtyCost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_product_qty_cost', function($table)
        {
            $table->increments('id');
            $table->integer('pitch_id');
            $table->integer('event_id');
            $table->integer('product_id');
            $table->integer('cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_product_qty_cost');
    }
}
