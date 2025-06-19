<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cases;

class CasesTypeStaffLegalController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
         $filterJenisCases = $request->query('filter');

        // Inisialisasi query dengan filter departemen
        $query = Cases::where('departement', 'LegalDept');

        // Jika filter dipilih, tambahkan filter jenis cases
        if ($filterJenisCases) {
            $query->where('jenis_cases', $filterJenisCases);
       
        }

        // Ambil data hasil filter
        $cases = $query->get();

        // Ambil daftar jenis_cases unik untuk dropdown
        $jenisCasesList = Cases::where('departement', 'LegalDept')->select('jenis_cases')->distinct()->pluck('jenis_cases');

        return view('layouts.LegalDept.Staff.casesType.index', compact('user', 'cases', 'filterJenisCases', 'jenisCasesList'));
        
    }
}
