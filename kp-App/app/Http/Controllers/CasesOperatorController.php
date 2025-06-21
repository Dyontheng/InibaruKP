<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cases;
use Carbon\Carbon;

class CasesOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $cases = Cases::all();
        
        return view('layouts.Operator.cases.index', compact('user','cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('layouts.Operator.cases.tambah', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no_cases' => 'required|string|max:255',
            'name_cases' => 'required|string|max:255',
            'date_cases' => 'required|date',
            'site_cases' => 'required|string|max:255',
            'status_cases' => 'required|string|in:Active,Not Active,Pending',
            'info_cases' => 'required|string|max:255',
            'doc_cases' => 'required||file|mimes:pdf,doc,docx|max:4096',
            'jenis_cases' => 'required|string|max:255',
            'departement' => 'required|string|max:255',
        ]);

        if ($request->hasFile('doc_cases')) {
            $file = $request->file('doc_cases');
            $originalNameFileDokumen = $file->getClientOriginalName();
            $fileDokumenTipePath = $file->storeAs('dokumen_cases', $originalNameFileDokumen, 'public');
            $validateData['doc_cases'] = $originalNameFileDokumen;
        }

        $user = Auth::user();

        $cases = new Cases([
            'no_cases' => $validateData['no_cases'],
            'name_cases' => $validateData['name_cases'],
            'date_cases' => $validateData['date_cases'],
            'site_cases' => $validateData['site_cases'],
            'status_cases' => $validateData['status_cases'],
            'info_cases' => $validateData['info_cases'],
            'doc_cases' => $validateData['doc_cases'],
            'jenis_cases' => $validateData['jenis_cases'],
            'departement' => $validateData['departement'],
        ]);

        // Simpan ke database
        Cases::create($validateData);

        return redirect()->route('casesOperator.index')->with('success', 'Dokumen Cases berhasil ditambahkan!');
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
       $user = Auth::user();
        $case = Cases::findOrFail($id); // Ambil data case berdasarkan id, kalau gak ada lempar 404
        return view('layouts.Operator.cases.edit', compact('user', 'case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'status_cases' => 'required|string|max:255',
            'info_cases' => 'required|string|max:255',
            'doc_cases' => 'required|string|max:255',
        ]);

        $case = Cases::findOrFail($id);
        $case->update($request->all());

    
        return redirect()->route('casesOperator.index')->with('success', 'Data Cases berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $case = Cases::findOrFail($id);
        $case->delete();

        return redirect()->route('casesOperator.index')->with('success', 'Data Cases berhasil dihapus!');
    }
}
