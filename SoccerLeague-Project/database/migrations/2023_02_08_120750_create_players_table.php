<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Enum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('name');
            $table->string('surname1')->nullable(true);
            $table->string('surname2')->nullable(true);
            //$table->string('role')->nullable(true);
            $table->enum('role', ['goalkeeper', 'defender', 'midfielder', 'forward'])->nullable(true);
            $table->date('birthdate')->nullable(true);
            $table->foreignId('team_id')->constrained();
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
        Schema::dropIfExists('players');
    }
};
