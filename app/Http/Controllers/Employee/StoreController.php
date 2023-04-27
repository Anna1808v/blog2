<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

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
