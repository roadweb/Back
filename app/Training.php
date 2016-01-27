<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model {

	protected $table = 'training';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $visible = array('name');

	public function user()
	{
		return $this->hasMany('App\Models\UserDetails');
	}

}