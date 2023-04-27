<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\UpdateRequest;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, Employee $employee)
    {
        $data = $request->validated();

        if(isset($data['cities'])){
            $cities = $data['cities'];
            unset($data['cities']);
            $employee->cities()->sync($cities);
            $employee->update($data);
        } else {
            $employee->cities()->detach();
            $employee->update($data);
        }
        
        return redirect()->route('employee.show', $employee->id);
    }
}
