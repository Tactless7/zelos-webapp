<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('waist')->unsigned();
          $table->integer('hips')->unsigned();
          $table->integer('breasts')->unsigned();
          $table->integer('under_breasts')->unsigned();
          $table->integer('thigh_left')->unsigned();
          $table->integer('thigh_right')->unsigned();
          $table->integer('arm_left')->unsigned();
          $table->integer('arm_right')->unsigned();
          $table->integer('calf_left')->unsigned();
          $table->integer('calf_right')->unsigned();
          $table->date('date');
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
        Schema::dropIfExists('measurements');
    }
}
