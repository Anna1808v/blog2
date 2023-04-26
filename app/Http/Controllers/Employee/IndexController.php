<?php

namespace App\Http\Controllers\Employee;

use App\City;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $employees = Employee::all();
        $department = Department::find(3);
        $cities = City::find(1);

        return view('employee.index', compact('employees'));
    }
}
