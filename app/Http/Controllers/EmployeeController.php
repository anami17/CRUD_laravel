<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;   
session_start(); 

class EmployeeController extends Controller
{
    //index
    public function index () {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);      
    }

    public function create () {
        return view('employees.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'department' => 'required', 
            'position' => 'required',
            'address' => 'required ' 
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'))->with('message', 'Employee Updated Successfully!');
    }

    public function edit(Employee $employee) {
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'department' => 'required', 
            'position' => 'required',
            'address' => 'required ' 
        ]);

        $employee->update($data);

        return redirect(route('employee.index'))->with('message', 'Employee Updated Successfully!');
    }

    public function destroy(Employee $employee) {
        $employee->delete();

        return redirect(route('employee.index'))->with('message', 'Employee Deleted Successfully!');
        
    }
}
