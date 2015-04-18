<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['title', 'content', 'published', 'author_id', 'category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function author() {
        return $this->belongsTo('App\User');
    }

    public function scopePublished($query) {
        return $query->where('published', 'on');
    }
}
