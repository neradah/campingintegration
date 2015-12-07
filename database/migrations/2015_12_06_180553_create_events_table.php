<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name');
            $table->text('slug');
            $table->text('type');
            $table->text('location');
            $table->date('start');
            $table->date('end');
            $table->date('homepage_expire');
            $table->text('thumbnail');
            $table->text('banner');
            $table->integer('discount');
            $table->boolean('show_homepage');
            $table->longText('about_info');
            $table->longText('parking_info');
            $table->longText('arrival_info');
            $table->text('map');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
