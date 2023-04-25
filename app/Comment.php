<?php

namespace App;

use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTO(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
