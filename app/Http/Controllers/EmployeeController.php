<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employee.create', compact('departments'));
    }

    public function store()
    {
        $data = request()->validate([
                'name' => 'string',
                'phone_number' => 'string',
                'passport_id' => 'string',
                'position' => 'string',
                'salary' => 'integer',
                'department_id' => ''
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
        $departments = Department::all();
        return view('employee.edit', compact('employee', 'departments'));
    }

    public function update(Employee $employee)
    {
        $data = request()->validate([
            'name' => 'string',
            'phone_number' => 'string',
            'passport_id' => 'string',
            'position' => 'string',
            'salary' => 'integer',
            'department_id' => ''
        ]);

        $employee->update($data);
        return redirect()->route('employee.show', $employee->id);
    } 

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
