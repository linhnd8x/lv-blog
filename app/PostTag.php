<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
	protected $table = 'blog_post_tags';
     protected $fillable = ['post_id', 'tag_id'];
}
