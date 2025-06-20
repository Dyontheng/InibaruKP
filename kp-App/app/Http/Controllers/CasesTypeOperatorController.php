<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cases;

class CasesTypeOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $user = Auth::user();
         $filter = $request->query('filter');
        $cases = Cases::all();

        
        // Jika filter dipilih, ambil hanya dokumen dengan document_type tertentu
        if ($filter) {
            $cases = cases::where('jenis_cases', $filter)->get();
       
        }
        return view('layouts.Operator.casesType.index', compact('user', 'cases'));
        return view('Operator.', compact('Cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
