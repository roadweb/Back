<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

	protected $fillable = [
        'name',
        'job_icon',
        'slide_img',
        'resume',
        'content'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany('App\User');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() {
        return $this->hasMany('App\Post');
    }

}
