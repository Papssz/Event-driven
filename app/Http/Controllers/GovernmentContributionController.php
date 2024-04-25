<?php

namespace App\Http\Controllers;

use App\Models\GovernmentContribution;
use Illuminate\Http\Request;

class GovernmentContributionController extends Controller
{
    public function index()
    {
        $contributions = GovernmentContribution::all();
        return view('government_contributions.index', compact('contributions'));
    }

    
}