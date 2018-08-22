<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            // Guardian // Information
            $table->string('guardian_email')->nullable();
            $table->string('guardian_sponcor_name');
            $table->string('guardian_occupation');
            $table->string('guardian_full_name');
            $table->string('guardian_address');
            $table->string('guardian_phone');

            // Appearance
            $table->string('eye_color');
            $table->string('height');
            $table->string('width');
            $table->string('hobby');
            $table->string('weight');
            $table->string('hair_color');

            // Personal
            $table->string('programme');
            $table->string('role_model');
            $table->string('place_of_birth');
            $table->string('favourite_color');
            $table->string('state_of_origin');
            $table->string('favourite_artiste');
            $table->string('name_of_institution');
            $table->string('local_government_area');
            $table->string('statistics')->nullable();

            $table->increments('id');
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
        Schema::dropIfExists('profiles');
    }
}
