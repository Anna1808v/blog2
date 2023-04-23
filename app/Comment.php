<?php

namespace App;

use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function category()
    {
        return $this->belongsTO(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
