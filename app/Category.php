<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function comments()
    { 
        return $this->hasMany(Comment::class, 'category_id', 'id');
    }
}
