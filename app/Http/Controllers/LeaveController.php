<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Carbon\Carbon;

class LeaveController extends Controller
{
    
        public function index()
    {
        $leaveRequests = Leave::all();

        foreach ($leaveRequests as $leaveRequest) {
            $leaveRequest->start_leave = Carbon::parse($leaveRequest->start_leave)->format('Y-m-d');
            $leaveRequest->end_leave = Carbon::parse($leaveRequest->end_leave)->format('Y-m-d');
        }    

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
        ]);

        $leave = Leave::create($validatedData);

        return redirect()->route('leaves.index')->with('success', 'Leave request submitted successfully.');
    }

    public function approve($id)
    {
        $leaveRequest = Leave::findOrFail($id);
        
        $leaveRequest->status = 'approved';
        $leaveRequest->save();
        
        return redirect()->route('leaves.index')->with('success', 'Leave request approved successfully.');
    }


    public function destroy($id)
    {
        $leaveRequest = Leave::findOrFail($id);
        
        $leaveRequest->delete();
        
        return redirect()->route('leaves.index')->with('success', 'Leave request deleted successfully.');
    }
}