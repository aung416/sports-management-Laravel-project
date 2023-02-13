<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamCreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_create_forms', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            // $table->string('player_name1');
            // $table->string('postion1');
            // $table->string('player_name2');
            // $table->string('postion2');
            // $table->string('player_name3');
            // $table->string('postion3');
            // $table->string('player_name4');
            // $table->string('postion4');
            // $table->string('player_name5');
            // $table->string('postion5');
            // $table->string('player_name6');
            // $table->string('postion6');
            // $table->string('player_name7');
            // $table->string('postion7');
            // $table->string('player_name8');
            // $table->string('postion8');
            // $table->string('player_name9');
            // $table->string('postion9');
            // $table->string('player_name10');
            // $table->string('postion10');
            // $table->string('player_name11');
            // $table->string('postion11');
            // $table->string('player_name12');
            // $table->string('postion12');
            // $table->string('player_name13');
            // $table->string('postion13');
            // $table->string('player_name14');
            // $table->string('postion14');
            // $table->string('player_name15');
            // $table->string('postion15');
            // $table->string('player_name16');
            // $table->string('postion16');
            // $table->string('player_name17');
            // $table->string('postion17');
            // $table->string('player_name18');
            // $table->string('postion18');
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
        Schema::dropIfExists('team_create_forms');
    }
}
