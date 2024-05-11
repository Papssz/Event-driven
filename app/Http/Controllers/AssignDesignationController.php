<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignDesignation;
use App\Models\Designation;
use App\Models\Department;

class AssignDesignationController extends Controller
{
    public function create($emp_num)
    {
        $designations = Designation::all();
        
        $departments = Department::all();

        return view('assign-designations.create', [
            'emp_num' => $emp_num,
            'designations' => $designations,
            'departments' => $departments,
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
            'emp_num' => $emp_num, 
            'designation_id' => $request->designation_id,
            'employee_type' => $request->employee_type,
            'status' => $request->status,
        ]);

        return redirect()->route('employees.index')->with('success', 'Designation assigned successfully.');
    }
}
