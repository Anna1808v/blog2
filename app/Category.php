<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
