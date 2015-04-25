<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['id', 'question', 'likes', 'job_id', 'user_id', 'state_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    /**
     * Permet de moduler la date au format français
     * @param $value
     * @return bool|string
     */
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y \à H:i:s', strtotime($value));
    }
}
