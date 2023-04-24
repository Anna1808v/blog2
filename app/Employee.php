<?php

namespace App;

use App\City;
use App\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $guarded = false;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}
