<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Document;

class DokumenTypeManagerITDeptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $filterJenisData = $request->query('filter'); // ambil filter jenis data dari dropdown

        $query = Document::where('departement', 'ITDept');

        // Jika ada filter jenis data, tambahkan ke query
        if ($filterJenisData) {
            $query->where('jenis_data', $filterJenisData);
        }

        // Ambil hasil query
        $documents = $query->get();

        // Ambil daftar jenis_data unik untuk dropdown
        $jenisDataList = Document::where('departement', 'ITDept')->select('jenis_data')->distinct()->pluck('jenis_data');
        return view('layouts.ITDept.Manager.dokumenMaster.dokumenType.index', compact('user', 'documents', 'jenisDataList', 'filterJenisData'));
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
