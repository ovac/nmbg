<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalenderEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calender_events', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('end');
            $table->string('title');
            $table->dateTime('start');
            $table->boolean('all_day');
            $table->longText('description');
            $table->string('background_color')->nullable();
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
        Schema::dropIfExists('calender_events');
    }
}
