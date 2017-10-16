<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('alert_id');
            $table->string('alert_name');
            $table->integer('alert_time')->unsigned();
            $table->tinyInteger('questions_count')->default(10)->unsigned();
            $table->tinyInteger('time_per_question')->default(1)->unsigned();
            $table->integer('editor_id')->unsigned();
            $table->foreign('editor_id')->references('user_id')->on('users');
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('model_id')->on('models');
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
        Schema::drop('alerts');
    }
}
