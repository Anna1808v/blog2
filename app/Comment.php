<?php

namespace App;

use App\Tag;
use App\Category;
use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Filterable;

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
