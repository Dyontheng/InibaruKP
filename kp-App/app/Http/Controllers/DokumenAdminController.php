<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Document;
use Carbon\Carbon;

class DokumenAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $today = Carbon::today();

        $documents = Document::all()->map(function ($doc) use ($today) {
            $selisihHari = Carbon::parse($doc->expired_date)->diffInDays($today, false);
            $doc->in_reminder = $selisihHari <= $doc->reminder_days && Carbon::parse($doc->expired_date)->greaterThan($today);
            return $doc;
        });

        return view('layouts.admin.dokumenMaster.dokumen.index', compact('user', 'documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('layouts.admin.dokumenMaster.dokumen.tambah', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no_document' => 'required|string|max:255',
            'name_document' => 'required|string|max:255',
            'document_type' => 'required|file|mimes:pdf,doc,docx|max:4096',
            'location' => 'required|string|max:255',
            'effective_date' => 'required|date',
            'expired_date' => 'required|date|after_or_equal:effective_date',
            'reminder_days' => 'required|integer|min:1',
            'departement' => 'required|string|in:ITDept,FinanceDept,LegalDept,PurchDept,ExportDept,HRDept',
            'jenis_data' => 'required|string|in:Audit,Barang,Keuangan,Jadwal,IzinOperasional,Rapat',
        ]);

        if ($request->hasFile('document_type')) {
            $file = $request->file('document_type');
            $originalNameFileDokumen = $file->getClientOriginalName();
            $fileDokumenTipePath = $file->storeAs('dokumen_tipe', $originalNameFileDokumen, 'public');
            $validateData['document_type'] = $originalNameFileDokumen;
        }

        $user = Auth::user();

        $documents = new Document([
            'no_document' => $validateData['no_document'],
            'name_document' => $validateData['name_document'],
            'document_type' => $validateData['document_type'],
            'location' => $validateData['location'],
            'effective_date' => $validateData['effective_date'],
            'expired_date' => $validateData['expired_date'],
            'reminder_days' => $validateData['reminder_days'],
            'departement' => $validateData['departement'],
            'jenis_data' => $validateData['jenis_data'],
        ]);

        // Simpan ke database
        $documents->save();

        return redirect()->route('dokumenAdmin.index')->with('success', 'Dokumen berhasil ditambahkan!');
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
        $documents = Document::findOrFail($id);
        return view('layouts.admin.dokumenMaster.dokumen.edit', compact('user', 'documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'no_document' => 'required|string|max:255',
            'name_document' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'document_type' => 'required|file|mimes:pdf,doc,docx|max:4096',
            'effective_date' => 'required|date',
            'expired_date' => 'required|date|after_or_equal:effective_date',
            'reminder_days' => 'required|integer|min:1',
            'departement' => 'required|string|in:ITDept,FinanceDept,LegalDept,PurchDept,ExportDept,HRDept',
            'jenis_data' => 'required|string|in:Audit,Barang,Keuangan,Jadwal,IzinOperasional,Rapat',
        ]);

        $document = Document::findOrFail($id);

        if ($request->hasFile('document_type')) {
            $file = $request->file('document_type');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/dokumen_tipe/', $filename);
            $validateData['document_type'] = $filename;
        } else {
            $validateData['document_type'] = $document->document_type;
        }

        $document->update($validateData);

        return redirect()->route('dokumenAdmin.index')->with('success', 'Dokumen berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return redirect()->route('dokumenAdmin.index')->with('success', 'Dokumen berhasil dihapus!');
    }
}
