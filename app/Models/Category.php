<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = false;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function posts()
	{
		return $this->hasMany('App\Models\Post');
	}

}