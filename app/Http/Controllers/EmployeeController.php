<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $getEmployee = Employee::orderBy('id', 'desc')->get();
        return view('employee.index-employee', compact('getEmployee'));
    }

    public function add(){
        return view('employee.add-employee');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'address' => 'required',
        ]);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->department = $request->department;
        $employee->designation =  $request->designation;
        $employee->salary = $request->salary;
        $employee->address = $request->address;
        $employee->save();
        return redirect()->route('employee.index');
    }

}
