<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signatory;
use App\Models\Employee; 

class SignatoryController extends Controller
{
    public function index()
    {
        $signatories = Signatory::all();

        return view('signatories.index', compact('signatories'));
    }

    public function create()
    {
        $employees = Employee::all(); 

        
        return view('signatories.create_signatory', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'highersuperior' => 'required|different:employee_id|exists:employees,id',
            'status' => 'required|in:active,inactive',
        ]);

        Signatory::create($validatedData);

        return redirect()->route('signatories.index')->with('success', 'Signatory added successfully.');
    }

    public function destroy(Signatory $signatory)
    {
        $signatory->delete();

        return redirect()->route('signatories.index')->with('success', 'Signatory deleted successfully.');
    }
}
