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
        // Fetch the list of designations from the database
        $designations = Designation::all();
        
        // Pass the designations to the view
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
        // Validate the request data
        $request->validate([
            'designation_name' => 'required',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|in:active,inactive',
        ]);

        // Find the designation record
        $designation = Designation::findOrFail($id);

        // Update the designation record with the new data
        $designation->update($request->all());

        // Redirect back to the index page with success message
        return redirect()->route('designations.index')->with('success', 'Designation updated successfully.');
    }

    public function destroy($id)
    {
        // Find the designation record
        $designation = Designation::findOrFail($id);

        // Delete the designation record
        $designation->delete();

        // Redirect back to the index page with success message
        return redirect()->route('designations.index')->with('success', 'Designation deleted successfully.');
    }
}
