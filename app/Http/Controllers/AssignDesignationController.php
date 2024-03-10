<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignDesignation;
use App\Models\Designation;

class AssignDesignationController extends Controller
{
    public function create($emp_num)
    {
        // Fetch the list of designations
        $designations = Designation::all();

        // Pass the designations and employee number to the view
        return view('assign-designations.create', [
            'emp_num' => $emp_num,
            'designations' => $designations,
        ]);
    }


    public function store(Request $request, $emp_num)
    {
        $request->validate([
            'designation_id' => 'required',
            'employee_type' => 'required',
            'status' => 'required',
        ]);

        AssignDesignation::create([
            'emp_num' => $emp_num, // Use the provided employee number
            'designation_id' => $request->designation_id,
            'employee_type' => $request->employee_type,
            'status' => $request->status,
        ]);

        return redirect()->route('employees.index')->with('success', 'Designation assigned successfully.');
    }
}
