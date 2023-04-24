<?php

namespace App\Http\Controllers;

use App\City;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $department = Department::find(3);
        $cities = City::find(1);

        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $cities = City::all();
        return view('employee.create', compact('departments', 'cities'));
    }

    public function store()
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
        $cities = $data['cities'];
        unset($data['cities']);
        
        $employee = Employee::create($data);
        $employee->cities()->attach($cities);

        return redirect()->route('employee.index');
    }

    public function show(Employee $employee)
    {
        $cities = $employee->cities;
        return view('employee.show', compact('employee', 'cities'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $cities = City::all();

        return view('employee.edit', compact('employee', 'departments', 'cities'));
    }

    public function update(Employee $employee)
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

        $employee->update($data);
        $employee->cities()->sync($cities);

        return redirect()->route('employee.show', $employee->id);
    } 

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
