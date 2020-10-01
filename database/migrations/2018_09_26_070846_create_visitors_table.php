<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{

    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('visitor_id');
            $table->integer('hour_00')->default(0);
            $table->integer('hour_01')->default(0);
            $table->integer('hour_02')->default(0);
            $table->integer('hour_03')->default(0);
            $table->integer('hour_04')->default(0);
            $table->integer('hour_05')->default(0);
            $table->integer('hour_06')->default(0);
            $table->integer('hour_07')->default(0);
            $table->integer('hour_08')->default(0);
            $table->integer('hour_09')->default(0);
            $table->integer('hour_10')->default(0);
            $table->integer('hour_11')->default(0);
            $table->integer('hour_12')->default(0);
            $table->integer('hour_13')->default(0);
            $table->integer('hour_14')->default(0);
            $table->integer('hour_15')->default(0);
            $table->integer('hour_16')->default(0);
            $table->integer('hour_17')->default(0);
            $table->integer('hour_18')->default(0);
            $table->integer('hour_19')->default(0);
            $table->integer('hour_20')->default(0);
            $table->integer('hour_21')->default(0);
            $table->integer('hour_22')->default(0);
            $table->integer('hour_23')->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
