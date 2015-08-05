<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany('App\User');
    }
}
