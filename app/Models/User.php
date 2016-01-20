<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('email', 'timestamps');
	protected $hidden = array('password');

	public function userDetails()
	{
		return $this->hasOne('App\Models\UserDetails');
	}

	public function asksManager()
	{
		return $this->hasMany('App\Models\Asks', 'manager_id');
	}

	public function asks()
	{
		return $this->morphMany('App\Models\Asks', 'askable');
	}

}