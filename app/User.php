<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('email', 'username', 'timestamps');
	protected $visible = array('username');
	protected $hidden = array('password');

	public function asksManager()
	{
		return $this->hasMany('App\Models\Asks', 'manager_id');
	}

	public function asks()
	{
		return $this->morphMany('App\Models\Asks', 'askable');
	}

	public function userdetails()
	{
		return $this->hasOne('App\Models\User');
	}

}