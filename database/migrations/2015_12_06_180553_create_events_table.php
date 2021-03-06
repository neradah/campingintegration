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
            $table->text('name')->nullable();
            $table->text('slug');
            $table->integer('category_id')->nullable();
            $table->text('location')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('homepage_expire')->nullable();
            $table->date('early_bird_start')->nullable();
            $table->date('early_bird_end')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('banner')->nullable();
            $table->integer('discount')->nullable();
            $table->boolean('show_homepage')->nullable();
            $table->boolean('show_carousel')->nullable();
            $table->longText('about_info')->nullable();
            $table->longText('parking_info')->nullable();
            $table->longText('arrival_info')->nullable();
            $table->text('map')->nullable();
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
