<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'title', 'content', 'published_at', 'category_id',
    ];

  protected $dates = ['published_at'];
  protected $guarded = [];
    // posts has many comments
    // returns all comments on that post
    public function comments()
    {
      return $this->hasMany('App\Comments','on_post');
    }
    // returns the instance of the user who is author of that post
    public function author()
    {
      return $this->belongsTo('App\User','author_id');
    }
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = $value;

		if (! $this->exists) {
		  $this->attributes['slug'] = str_slug($value);
		}
	}
}
