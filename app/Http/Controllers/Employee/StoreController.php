<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'passport_id' => 'required|string',
            'position' => 'required|string',
            'salary' => 'required|integer',
            'department_id' => '',
            'cities' => ''
        ]);

    $employee = Employee::create($data);

    if(isset($data['cities']))
    {
        $cities = $data['cities'];
        unset($data['cities']);
        $employee->cities()->attach($cities);
    }
    
    return redirect()->route('employee.index');

    }
}
