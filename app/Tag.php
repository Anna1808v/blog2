<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'comment_tags', 'tag_id', 'comment_id');
    }
}
