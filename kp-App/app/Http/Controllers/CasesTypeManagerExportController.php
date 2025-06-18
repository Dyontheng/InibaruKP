<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cases;

class CasesTypeManagerExportController extends Controller
{
   public function index()
    {
        $user = Auth::user();
        $cases = Cases::all();
        return view('layouts.ExportDept.Manager.casesType.index', compact('user', 'cases'));
    }
}
