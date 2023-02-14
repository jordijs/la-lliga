<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $name
 * @property $score
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @property Game[] $games
 * @property Player[] $players
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'name' => 'required',
		'score' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','score'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gamesLocal()
    {
        return $this->hasMany('App\Models\Game', 'team_local_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gamesVisitor()
    {
        return $this->hasMany('App\Models\Game', 'team_visitor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playersOfTeam()
    {
        return $this->hasMany('App\Models\Player', 'team_id', 'id');
    }
    

}
