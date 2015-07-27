<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reseaux extends Model {

    /**
     * @var array
     */
    protected $fillable = [
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users() {
        return $this->belongsTo('App\User');
    }


}
