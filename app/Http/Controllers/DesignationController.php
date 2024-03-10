<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        return view('designations.index', compact('designations'));
    }

    public function create()
    {
        // You might need to pass some additional data to the create view, such as departments
        return view('designations.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'designation_name' => 'required',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new designation record
        Designation::create($request->all());

        // Redirect back to the index page with success message
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
