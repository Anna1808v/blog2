<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $department = Department::find(5);
        // return view('employee.index', compact('employees'));
        dd($department->employees);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store()
    {
        $data = request()->validate([
                'name' => 'string',
                'phone_number' => 'string',
                'passport_id' => 'string',
                'position' => 'string',
                'salary' => 'integer'
            ]);
        Employee::create($data);
        return redirect()->route('employee.index');
    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Employee $employee)
    {
        $data = request()->validate([
            'name' => 'string',
            'phone_number' => 'string',
            'passport_id' => 'string',
            'position' => 'string',
            'salary' => 'integer'
        ]);
        $employee->update($data);
        return redirect()->route('employee.index');
    } 

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
