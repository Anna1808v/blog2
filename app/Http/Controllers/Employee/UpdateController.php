<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Employee $employee)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'passport_id' => 'required|string',
            'position' => 'required|string',
            'salary' => 'required|string',
            'department_id' => '',
            'cities' => ''
        ]);

        $cities = $data['cities'];
        unset($data['cities']);
        $employee->cities()->sync($cities);
        $employee->update($data);

        return redirect()->route('employee.show', $employee->id);
    }
}
