<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cases;
use Carbon\Carbon;


class CasesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $cases = Cases::all();

        //   $cases = Cases::whereDate('expired_date', '>', $today)
        //     ->get()
        //     ->filter(function ($case) use ($today) {
        //         $selisihHari = Carbon::parse($case->expired_date)->diffInDays($today, false);
        //         return $selisihHari <= $case->reminder_days; // reminder aktif
        //     });
        return view('layouts.admin.cases.index', compact('user', 'cases'));
        return view('admin.', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('layouts.admin.cases.tambah', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'no_cases' => 'required|string|max:255',
        'name_cases' => 'required|string|max:255',
        'date_cases' => 'required|date',
        'site_cases' => 'required|string|max:255',
        'status_cases' => 'required|string|in:Active,Not Active,Pending',
        'info_cases' => 'required|string|max:255',
        'doc_cases' => 'required|string|max:255',
        'jenis_cases' => 'required|string|max:255',
        'departement' => 'required|string|max:255',
    ]);

    $cases = $request->all();

    // Upload dokumen jika ada
    if ($request->hasFile('doc_cases')) {
        $file = $request->file('doc_cases');
        $originalName = $file->getClientOriginalName();
        $path = $file->storeAs('cases', $originalName, 'public');

        // Simpan nama file ke database
        $cases['doc_cases'] = $originalName;
    }

    // Simpan ke database
    Cases::create($cases);

    return redirect()->route('casesAdmin.index')->with('success', 'Dokumen Cases berhasil ditambahkan!');
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
        return view('layouts.admin.cases.edit', compact('user', 'case'));
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


        return redirect()->route('casesAdmin.index')->with('success', 'Data Cases berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $case = Cases::findOrFail($id);
        $case->delete();

        return redirect()->route('casesAdmin.index')->with('success', 'Data Cases berhasil dihapus!');
    }
}
