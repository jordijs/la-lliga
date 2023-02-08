<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    //One to Many
    //Shows the games where the team has played
    public function games(){
        return $this->hasMany(Game::class);   }

//One to Many
    //Shows the players belonging to this team
    public function players(){
        return $this->hasMany(Player::class);   }

}

