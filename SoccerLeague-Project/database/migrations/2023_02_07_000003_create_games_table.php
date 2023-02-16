<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->foreignId('team_local_id')->constrained('teams');
            $table->foreignId('team_visitor_id')->constrained('teams');
            $table->dateTime('date_time');
            $table->tinyInteger('goals_local');
            $table->tinyInteger('goals_visitor');
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
        Schema::dropIfExists('games');
    }
};
