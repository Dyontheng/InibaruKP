<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cases;

class CasesTypeManagerITController extends Controller
{
   Public function index()
    {
        $user = Auth::user();
        $cases = Cases::all();
        return view('layouts.ITDept.Manager.casesType.index', compact('user', 'cases'));
    }
}
