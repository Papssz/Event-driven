<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::all();

        return view('payroll.index', ['payrolls' => $payrolls]);
    }
    /*
    public function generatePayroll(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $employees = Employee::all(); 

        foreach ($employees as $employee) {
            $payrollData = [
                'employee_id' => $employee->id,
                'employee_name' => $employee->name,
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
            ];

            Payroll::create($payrollData);
        }

        return response()->json(['message' => 'Payroll generated successfully'], 200);
    }
    */
    public function create()
    {
        $employees = Employee::all();

        return view('payroll.create', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'start_of_cutoff' => 'required|date',
            'end_of_cutoff' => 'required|date',
        ]);

        Payroll::create([
            'employee_id' => $request->input('employee_id'),
            'start_of_cutoff' => $request->input('start_of_cutoff'),
            'end_of_cutoff' => $request->input('end_of_cutoff'),
        ]);

        return redirect()->route('payroll.index')->with('success', 'Payroll generated successfully');
    }

    public function delete($id)
    {
        $payroll = Payroll::findOrFail($id);

        $payroll->delete();

        return redirect()->route('payroll.index')->with('success', 'Payroll deleted successfully');
    }
}
