<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Right extends Model {

	protected $table = 'right';
	public $timestamps = false;
	protected $fillable = array('name');

	public function userDetails()
	{
		return $this->hasMany('App\Models\UserDetails');
	}

}