<?php

namespace App;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static filter(mixed $filter)
 * @method static paginate(int $int)
 * @property mixed tags
 */
class Comment extends Model
{
    use Filterable;
    use SoftDeletes;

    protected $guarded = false;

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
