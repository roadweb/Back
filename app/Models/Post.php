<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

	protected $table = 'posts';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('category_id', 'job_id', 'user_id', 'title', 'resume', 'matter', 'is_sticky', 'sticky_end', 'published', 'validated', 'timestamps');
	protected $visible = array('category_id', 'job_id', 'user_id', 'title', 'resume', 'matter', 'is_sticky', 'sticky_end', 'published');

	public function user()
	{
		return $this->belongsTo('App\Models\UserDetails');
	}

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}

	public function job()
	{
		return $this->belongsTo('App\Models\Job');
	}

	public function seo()
	{
		return $this->hasOne('App\Models\Seo');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\Tags')->withPivot('posts_has_tags');
	}

	public function ask()
	{
		return $this->hasOne('App\Models\Asks');
	}

}