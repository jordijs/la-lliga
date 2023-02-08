<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    //One to many (inverse)
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
