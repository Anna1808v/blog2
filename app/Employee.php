<?php

namespace App;

use App\City;
use App\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $table = 'employees';
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function cities()
    {
        return $this->belongsToMany(City::class, 'city_employees', 'employee_id', 'city_id');
    }
}

