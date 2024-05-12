<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\AssignDesignation;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));

    }

    public function create()
    {
        $randomEmpNum = mt_rand(100000, 999999);
        session()->put('randomEmpNum', $randomEmpNum);
        return view('employees.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
    ]);

    if (!$request->has('emp_num')) {
        $randomEmpNum = mt_rand(100000, 999999);
        while (Employee::where('emp_num', $randomEmpNum)->exists()) {
            $randomEmpNum = mt_rand(100000, 999999);
        }
        $request->merge(['emp_num' => $randomEmpNum]);
    }

    $employee = Employee::create($request->all());

    if ($request->has('designation_id')) {
        AssignDesignation::create([
            'emp_num' => $employee->emp_num, 
            'designation_id' => $request->input('designation_id'),
            'employee_type' => $request->input('employee_type'),
            'status' => $request->input('status'),
        ]);
    }

    return redirect()->route('employees.index')
        ->with('success', 'Employee created successfully.');
}
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $designations = Designation::all();
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'designations', 'departments'));
    }

    public function update(Request $request, Employee $employee)
{
    $validatedData = $request->validate([
        'emp_num' => 'required|string', 
        'firstname' => 'required|string',
        'middlename' => 'nullable|string',
        'lastname' => 'required|string',
        'address_line' => 'nullable|string',
        'brgy' => 'nullable|string',
        'province' => 'nullable|string',
        'country' => 'nullable|string',
        'zipcode' => 'nullable|string',
        'sss_no' => 'nullable|string',
        'philhealth_no' => 'nullable|string',
        'tin_no' => 'nullable|string',
        'employment_start_date' => 'required|date',
        'designation_id' => 'required|exists:designations,id', 
        'department_id' => 'required|exists:departments,id', 
    ]);

    $employee->update($validatedData);

    $assignDesignation = $employee->assignDesignation;

    if ($assignDesignation) {
        $assignDesignation->update([
            'designation_id' => $request->input('designation_id'),
        ]);

        $designation = Designation::find($request->input('designation_id'));

        $designation->update([
            'department_id' => $request->input('department_id'),
        ]);
    } else {
        
        AssignDesignation::create([
            'emp_num' => $employee->emp_num, 
            'designation_id' => $request->input('designation_id'),
            'department_id' => $request->input('department_id'),
            'employee_type' => 'R', 
            'status' => 'active', 
        ]);
    }

    return redirect()->route('employees.index', $employee->id)->with('success', 'Employee updated successfully.');
}


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }

    public function showDetails(Request $request)
{
    $employeeId = $request->input('employee_id');

    if ($employeeId) {
        $employee = Employee::find($employeeId);

        if ($employee) {
            return view('employees.employee_details', compact('employee'));
        } else {
            return redirect()->back()->with('error', 'Employee not found.');
        }
    } else {
        return view('employees.employee_details');
    }
}

}
