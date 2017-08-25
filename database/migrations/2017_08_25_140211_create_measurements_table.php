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
          $table->float('waist', 8, 2);
          $table->float('hips', 8, 2);
          $table->float('breasts', 8, 2);
          $table->float('under_breasts', 8, 2);
          $table->float('thigh_left', 8, 2);
          $table->float('thigh_right', 8, 2);
          $table->float('arm_left', 8, 2);
          $table->float('arm_right', 8, 2);
          $table->float('calf_left', 8, 2);
          $table->float('calf_right', 8, 2);
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
