<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Post extends Model
{

    protected $fillable = [
        'title',
        'content',
        'published',
        'user_id',
        'resume',
        'img_link',
        'category_id',
        'is_sticky',
        'job_id',
        'sticky_end',
        'ref_thumb',
        'ref_title',
        'ref_description',
        'techno_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function techno()
    {
        return $this->belongsTo('App\Techno');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', 'on');
    }

    public function scopeValid($query)
    {
        return $query->where('published', 'uc');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeSticked($query)
    {
        return $query->where('is_sticky', 'on');
    }

    /**
     * Permet de moduler la date au format français
     * @param $value
     * @return bool|string
     */
    public function getUpdatedAtAttribute($value)
    {
        return date('d-m-Y \à H:i:s', strtotime($value));
    }
}
