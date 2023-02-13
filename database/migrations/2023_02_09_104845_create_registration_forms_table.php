<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Team_Name');
            $table->string('Player_Name');
            $table->string('Player_ID');
            $table->string('Player_Age');
            $table->string('Session');
            $table->string('Player_Address');
            $table->string('Email');
            $table->string('Contract_Number');
            $table->string('Blood_Group');
            $table->string('Medical_History');
            $table->string('Sports_Category');
            $table->string('Position')->nullable();
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
        Schema::dropIfExists('registration_forms');
    }
}
