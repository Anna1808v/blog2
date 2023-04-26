<?php

namespace App\Http\Controllers\Employee;

use App\City;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $departments = Department::all();
        $cities = City::all();
        return view('employee.create', compact('departments', 'cities'));
    }
}
