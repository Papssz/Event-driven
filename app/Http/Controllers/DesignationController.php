<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Department;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        return view('designations.index', compact('designations'));
    }

    public function create()
    {
        $designations = Designation::all();
        
        return view('designations.create', ['designations' => $designations]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'designation_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|in:active,inactive',
        ]);

        Designation::create($validatedData);

        return redirect()->route('designations.index')->with('success', 'Designation created successfully.');
    }

    public function show($id)
    {
        $designation = Designation::findOrFail($id);
        return view('designations.show', compact('designation'));
    }

    public function edit($id)
    {
        $designation = Designation::findOrFail($id);
        return view('designations.edit', compact('designation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'designation_name' => 'required',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|in:active,inactive',
        ]);

        $designation = Designation::findOrFail($id);

        $designation->update($request->all());

        return redirect()->route('designations.index')->with('success', 'Designation updated successfully.');
    }

    public function destroy($id)
    {
        $designation = Designation::findOrFail($id);

        $designation->delete();

        return redirect()->route('designations.index')->with('success', 'Designation deleted successfully.');
    }
}
