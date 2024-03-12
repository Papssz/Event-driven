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
        return view('employees.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        // Add validation rules for other fields
    ]);

    // Generate a random 6-digit number
    $randomEmpNum = mt_rand(100000, 999999);

    // Check if the generated emp_num already exists
    while (Employee::where('emp_num', $randomEmpNum)->exists()) {
        // If it exists, generate a new random emp_num
        $randomEmpNum = mt_rand(100000, 999999);
    }

    // Create the employee with the generated emp_num
    Employee::create(array_merge($request->all(), ['emp_num' => $randomEmpNum]));

    return redirect()->route('employees.index')
        ->with('success', 'Employee created successfully.')
        ->with('randomEmpNum', $randomEmpNum); // Pass $randomEmpNum to the view
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
            'emp_num' => 'required|string',
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

        // Update the designation and department
        $assignDesignation = AssignDesignation::where('emp_num', $employee->emp_num)->first();
        if ($assignDesignation) {
            $assignDesignation->update([
                'designation_id' => $request->input('designation_id'),
                'department_id' => $request->input('department_id'),
            ]);
        } else {
            // If no assign designation record exists, create a new one
            AssignDesignation::create([
                'employee_id' => $employee->id,
                'designation_id' => $request->input('designation_id'),
                'department_id' => $request->input('department_id'),
            ]);
        }

        // Redirect back to the employee details page or any other desired page
        return redirect()->route('employees.details', $employee->emp_num)->with('success', 'Employee updated successfully.');
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
