<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
