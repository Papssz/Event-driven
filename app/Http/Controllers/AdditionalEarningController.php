<?php

namespace App\Http\Controllers;

use App\Models\AdditionalEarning;
use Illuminate\Http\Request;

class AdditionalEarningController extends Controller
{
    public function index()
    {
        $earnings = AdditionalEarning::all();
        return view('additional_earnings.index', compact('earnings'));
    }

    
}

