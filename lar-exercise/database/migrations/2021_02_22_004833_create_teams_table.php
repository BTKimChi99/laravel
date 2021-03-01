<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rogaining_type');
            $table->string('competition');
            $table->string('category');
            $table->date('start_date');
            $table->integer('schedul_time');
            $table->integer('numbers');
            $table->string('team_name');
            $table->string('repres_infor');
            $table->integer('id_user');
            $table->integer('id_event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
