<?php

namespace App\Http\Controllers\Employee;

use App\City;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Employee $employee)
    {
        $departments = Department::all();
        $cities = City::all();

        return view('employee.edit', compact('employee', 'departments', 'cities'));
    }
}
