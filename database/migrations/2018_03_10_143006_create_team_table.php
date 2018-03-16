<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('teams', function (Blueprint $table) {
            //
	        $table->increments('id')->unique();
	        $table->string('name');
	        $table->timestamps();
        });

        Schema::create('user_team', function(Blueprint $table) {
	        $table->increments('id')->unique();
	        $table->integer('user_id');
	        $table->integer('owner_id');
	        $table->integer('team_id');
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
	    Schema::drop('teams');
	    Schema::drop('user_team');
    }
}
