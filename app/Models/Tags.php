<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model {

	protected $table = 'tags';
	public $timestamps = false;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function posts()
	{
		return $this->belongsToMany('App\Models\Post')->withPivot('posts_has_tags');
	}

}