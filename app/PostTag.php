<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
     protected $fillable = array('post_id', 'tag_id');
}
