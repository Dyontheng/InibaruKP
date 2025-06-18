<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cases;

class CasesTypeDirekturExportController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $filter = $request->query('filter');
        $cases = Cases::all();

        
        // Jika filter dipilih, ambil hanya dokumen dengan document_type tertentu
        if ($filter) {
            $cases = cases::where('jenis_data', $filter)->get();
        } else {
            // Kalau tidak ada filter, kosongkan hasil
            $cases = collect(); // koleksi kosong
        }
        return view('layouts.ExportDept.Direktur.casesType.index', compact('user', 'cases'));
    }
}
