<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anonymous extends Model {

	protected $table = 'anonymous';
	public $timestamps = true;
	protected $fillable = array('email', 'username');

	public function asks()
	{
		return $this->morphMany('App\Models\Asks', 'askable');
	}

}