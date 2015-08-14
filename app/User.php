<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'last_name',
        'first_name',
        'job_id',
        'emweb',
        'asso',
        'right_id',
        'bio',
        'avatar',
        'www',
        'skype',
        'facebook',
        'twitter',
        'instagram',
        'pinterest',
        'behance',
        'linkedin',
        'viadeo',
        'youtube',
        'googleplus'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /*
    |--------------------------------------------------------------------------
    | HasMany
    |--------------------------------------------------------------------------
    */

    public function posts()
    {
        return $this->hasMany('App\Post');
    }


    public function questions()
    {
        return $this->hasMany('App\Question');
    }

//    public function socials()
//    {
//        return $this->hasMany('App\Social');
//    }

    /*
    |--------------------------------------------------------------------------
    | BelongsTo
    |--------------------------------------------------------------------------
    */

    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    public function right()
    {
        return $this->belongsTo('App\Right');
    }

    /*
    |--------------------------------------------------------------------------
    | scope
    |--------------------------------------------------------------------------
    */

    /**
     * @param $query
     * @return mixed
     */
    public function scopeRight($query)
    {
        return $query->where('right', '>', '2');
    }

}



