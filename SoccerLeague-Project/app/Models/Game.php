<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * @property $id
 * @property $team_local_id
 * @property $team_visitor_id
 * @property $date_time
 * @property $goals_local
 * @property $goals_visitor
 * @property $created_at
 * @property $updated_at
 *
 * @property Team $team
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Game extends Model
{
    
    static $rules = [
		'team_local_id' => 'required',
		'team_visitor_id' => 'required',
		'date_time' => 'required',
		'goals_local' => 'required',
		'goals_visitor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['team_local_id','team_visitor_id','date_time','goals_local','goals_visitor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamVisitor()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_visitor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamLocal()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_local_id');
    }
    

}
