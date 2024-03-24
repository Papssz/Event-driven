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
        //return view('employees.create');
        $randomEmpNum = mt_rand(100000, 999999);
        session()->put('randomEmpNum', $randomEmpNum);
        return view('employees.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        // Add validation rules for other fields
    ]);

    if (!$request->has('emp_num')) {
        $randomEmpNum = mt_rand(100000, 999999);
        // Check if the generated emp_num already exists
        while (Employee::where('emp_num', $randomEmpNum)->exists()) {
            // If it exists, generate a new random emp_num
            $randomEmpNum = mt_rand(100000, 999999);
        }
        $request->merge(['emp_num' => $randomEmpNum]);
    }

    // Create the employee record
    $employee = Employee::create($request->all());

    // Check if designation_id is present in the request
    if ($request->has('designation_id')) {
        // Create AssignDesignation record using the relationship
        AssignDesignation::create([
            'emp_num' => $employee->emp_num, // Fill the 'emp_num' field
            'designation_id' => $request->input('designation_id'),
            'employee_type' => $request->input('employee_type'),
            'status' => $request->input('status'),
        ]);
    }

    // Redirect back to the main page with a success message
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
    // Validate the incoming request
    $validatedData = $request->validate([
        'emp_num' => 'required|string', // Assuming 'emp_num' is required in the form
        'firstname' => 'required|string',
        'middlename' => 'nullable|string',
        'lastname' => 'required|string',
        'address_line' => 'nullable|string',
        'brgy' => 'nullable|string',
        'province' => 'nullable|string',
        'country' => 'nullable|string',
        'zipcode' => 'nullable|string',
        'designation_id' => 'required|exists:designations,id', // Ensure the designation exists
        'department_id' => 'required|exists:departments,id', // Ensure the department exists
    ]);

    // Update the employee details
    $employee->update($validatedData);

    // Retrieve the existing assignDesignation record
    $assignDesignation = $employee->assignDesignation;

    // If an assignDesignation record exists, update it
    if ($assignDesignation) {
        $assignDesignation->update([
            'designation_id' => $request->input('designation_id'),
        ]);

        // Retrieve the designation associated with the updated employee assignment
        $designation = Designation::find($request->input('designation_id'));

        // Update the department of the designation
        $designation->update([
            'department_id' => $request->input('department_id'),
        ]);
    } else {
        // If no assignDesignation record exists, create a new one
        AssignDesignation::create([
            'emp_num' => $employee->emp_num, // Ensure 'emp_num' is filled
            'designation_id' => $request->input('designation_id'),
            'department_id' => $request->input('department_id'),
            'employee_type' => 'R', // Assuming default employee_type is 'R' (Regular)
            'status' => 'active', // Assuming default status is 'active'
        ]);
    }

    // Redirect back to the employee details page or any other desired page
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
