<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id', 'id');
    }
}