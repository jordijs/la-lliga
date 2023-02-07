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
            $table->id();
            $table->unsignedBigInteger('team_local_id');
            $table->foreign('team_local_id')
            ->references('id')
            ->on('teams');
            $table->unsignedBigInteger('team_visitor_id');
            $table->foreign('team_visitor_id')
            ->references('id')
            ->on('teams');
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
