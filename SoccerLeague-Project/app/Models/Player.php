<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Player
 *
 * @property $id
 * @property $name
 * @property $surname1
 * @property $surname2
 * @property $role
 * @property $birthdate
 * @property $team_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Player extends Model
{
    
    static $rules = [
		'name' => 'required',
		'team_id' => 'required',
    ];


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname1','surname2','role','birthdate','team_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_id');
    }
    

}
