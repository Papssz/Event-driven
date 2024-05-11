<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index()
    {
        // Retrieve all payrolls from the database
        $payrolls = Payroll::all();

        // Pass the retrieved payrolls to the view for display
        return view('payroll.index', ['payrolls' => $payrolls]);
    }

    public function generatePayroll(Request $request)
    {
        // Validate the request data
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        // Retrieve employees for the specified payroll period
        $employees = Employee::all(); // You may adjust this based on your requirements

        // Generate payroll for each employee
        foreach ($employees as $employee) {
            // Perform calculations and generate payroll data for the employee
            $payrollData = [
                'employee_id' => $employee->id,
                'employee_name' => $employee->name,
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                // Add other payroll data as needed
            ];

            // Save the payroll data to the database
            Payroll::create($payrollData);
        }

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Payroll generated successfully'], 200);
    }
}