<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cases;

class CasesTypeManagerHrController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $cases = Cases::all();
        return view('layouts.HrDept.Manager.casesType.index', compact('user', 'cases'));
    }
}
