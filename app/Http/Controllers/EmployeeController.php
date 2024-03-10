<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'emp_num' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            // Add validation rules for other fields
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }

    public function showDetails()
    {
        $employees = Employee::all(); // Fetch all employees (you may adjust this query as needed)
        return view('employees.employee_details', compact('employees'));
    }
}
