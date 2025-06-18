<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Document;

class DokumenTypeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $filter = $request->query('filter');

        // Jika filter dipilih, ambil hanya dokumen dengan document_type tertentu
        if ($filter) {
            $documents = Document::where('jenis_data', $filter)->get();
        } else {
            // Kalau tidak ada filter, kosongkan hasil
            $documents = collect(); // koleksi kosong
        }
        return view('layouts.admin.dokumenMaster.dokumenType.index', compact('user', 'documents'));
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
