<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signatory;

class SignatoryController extends Controller
{
    public function index()
    {
        // Retrieve signatories from the database
        $signatories = Signatory::all();

        // Pass signatories data to the view
        return view('signatories.index', compact('signatories'));
    }

    public function create()
    {
        return view('signatories.create_signatory');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'highersuperior' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        // Create signatory record in the database
        Signatory::create($validatedData);

        // Redirect back with success message
        return redirect()->route('signatories.index')->with('success', 'Signatory added successfully.');
    }
}
