<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Carbon\Carbon;

class LeaveController extends Controller
{
    
        public function index()
    {
        // Retrieve leave requests from the database
        $leaveRequests = Leave::all();

        foreach ($leaveRequests as $leaveRequest) {
            $leaveRequest->start_leave = Carbon::parse($leaveRequest->start_leave)->format('Y-m-d');
            $leaveRequest->end_leave = Carbon::parse($leaveRequest->end_leave)->format('Y-m-d');
        }    

        // Pass leave requests data to the view
        return view('leaves.index', compact('leaveRequests'));
    }

    public function create()
    {
        return view('leaves.create_leave');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'start_leave' => 'required|date',
            'end_leave' => 'required|date|after_or_equal:start_leave',
            'leave_type' => 'required',
            // Add validation rules as needed
        ]);

        // Create leave record in the database
        $leave = Leave::create($validatedData);

        // Redirect back with success message
        return redirect()->route('leaves.index')->with('success', 'Leave request submitted successfully.');
    }

    public function destroy($id)
    {
        // Find the leave request by ID
        $leaveRequest = Leave::findOrFail($id);
        
        // Delete the leave request
        $leaveRequest->delete();
        
        // Redirect back with success message
        return redirect()->route('leaves.index')->with('success', 'Leave request deleted successfully.');
    }
}