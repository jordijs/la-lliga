<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

        //One to many (inverse)
        //Get the team this player belongs to
        public function team(){
            return $this->belongsTo(Team::class);
        }
}
