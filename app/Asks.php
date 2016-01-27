<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asks extends Model {

	protected $table = 'asks';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('job_id', 'manager_id', 'state_id', 'askable_id', 'askable_type', 'matter', 'likes', 'post_id');
	protected $visible = array('job_id', 'state_id', 'matter', 'likes');

	public function state()
	{
		return $this->belongsTo('App\Models\State');
	}

	public function job()
	{
		return $this->belongsTo('App\Models\Job');
	}

	public function manager()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function askable()
	{
		return $this->morphTo();
	}

	public function post()
	{
		return $this->hasOne('App\Models\Post');
	}

}