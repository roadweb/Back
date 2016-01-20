<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocialNetwork extends Model {

	protected $table = 'user_socialnetwork';
	public $timestamps = false;
	protected $fillable = array('user_id', 'socialnetwork_id', 'url');

	public function user()
	{
		return $this->hasOne('App\Models\UserDetails', 'user_id');
	}

	public function socialnetwork()
	{
		return $this->hasMany('App\Models\SocialNetwork', 'socialnetwork_id');
	}

}