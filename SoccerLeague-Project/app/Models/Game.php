<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    //One to many (inverse)
    //Get the Local Team for this Game
    public function teamLocal(){
        return $this->belongsTo(Team::class, 'team_local_id');
    }

    //Get the Visitor Team for this Game
    public function teamVisitor(){
        return $this->belongsTo(Team::class, 'team_visitor_id');
    }
}
