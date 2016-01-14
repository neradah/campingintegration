<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PitchGroupTent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitch_group_tent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pitch_group_id');
            $table->integer('tent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pitch_group_tent');
    }
}
