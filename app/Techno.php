<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Techno extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'img_link'
    ];

    /**
     * @var bool
     */

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function techno() {
        return $this->hasMany('App\Post');
    }

}
