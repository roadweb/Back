<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model {

	protected $table = 'userdetails';
	public $timestamps = true;
	protected $fillable = array('job_id', 'right_id', 'ip', 'training_id', 'username', 'firstname', 'lastname', 'address', 'city', 'country', 'birthday', 'avatar', 'visibility', 'bio', 'asso', 'website');
	protected $visible = array('username', 'firstname', 'lastname', 'address', 'city', 'country', 'birthday', 'avatar', 'bio', 'asso', 'website');

	public function job()
	{
		return $this->belongsTo('App\Models\Job');
	}

	public function userSocialNetwork()
	{
		return $this->hasOne('App\Models\UserSocialNetwork');
	}

	public function training()
	{
		return $this->belongsTo('App\Models\Training');
	}

	public function posts()
	{
		return $this->hasMany('App\Models\Post');
	}

	public function users()
	{
		return $this->hasOne('App\Models\User');
	}

	public function right()
	{
		return $this->belongsTo('App\Models\Right');
	}

}