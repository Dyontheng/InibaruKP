<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenAdminController;
use App\Http\Controllers\DokumenTypeAdminController;
use App\Http\Controllers\DokumenSiteLocationAdminController;
use App\Http\Controllers\DokumenDirekturITController;
use App\Http\Controllers\DokumenTypeDirekturITController;
use App\Http\Controllers\DokumenSiteLocationDirekturITDeptController;
use App\Http\Controllers\DokumenManagerITDeptController;
use App\Http\Controllers\DokumenTypeManagerITDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerITDeptController;
use App\Http\Controllers\DokumenStaffITDeptController;
use App\Http\Controllers\DokumenTypeStaffITDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffITDeptController;
use App\Http\Controllers\DokumenDirekturLegalDeptController;
use App\Http\Controllers\DokumenTypeDirekturLegalDeptController;
use App\Http\Controllers\DokumenSiteLocationDirekturLegalDeptController;
use App\Http\Controllers\DokumenManagerLegalDeptController;
use App\Http\Controllers\DokumenTypeManagerLegalDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerLegalDeptController;
use App\Http\Controllers\DokumenStaffLegalDeptController;
use App\Http\Controllers\DokumenTypeStaffLegalDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffLegalDeptController;
use App\Http\Controllers\DokumenDirekturHrDeptController;
use App\Http\Controllers\DokumenTypeDirekturHrDeptController;
use App\Http\Controllers\DokumenSiteLocationDirekturHrDeptController;
use App\Http\Controllers\DokumenManagerHrDeptController; 
use App\Http\Controllers\DokumenTypeManagerHrDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerHrDeptController;
use App\Http\Controllers\DokumenStaffHrDeptController;
use App\Http\Controllers\DokumenTypeStaffHrDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffHrDeptController;
use App\Http\Controllers\DokumenDirekturExportDeptController;
use App\Http\Controllers\DokumenTypeDirekturExportDeptController;
use App\Http\Controllers\DokumenSiteLocationDirekturExprtDeptController;
use App\Http\Controllers\DokumenManagerExportDeptController;
use App\Http\Controllers\DokumenTypeManagerExportDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerExprtDeptController;
use App\Http\Controllers\DokumenStaffExportDeptController;
use App\Http\Controllers\DokumenTypeStaffExportDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffExprotDeptController;
use App\Http\Controllers\DokumenDirekturFinanceDeptController;
use App\Http\Controllers\DokumenTypeDirekturFinanceDeptController;
use App\Http\Controllers\DokumenSiteLocationDirekturFinanceDeptController;
use App\Http\Controllers\DokumenManagerFinanceDeptController;
use App\Http\Controllers\DokumenTypeManagerFinanceDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerFinanceDeptController;
use App\Http\Controllers\DokumenStaffFinanceDeptController;
use App\Http\Controllers\DokumenTypeStaffFinanceDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffFinanceDeptController;
use App\Http\Controllers\DokumenDirekturPurchDeptController;
use App\Http\Controllers\DokumenTypeDirekturPurchDeptController;
use App\Http\Controllers\DokumenSiteLocationDirekturPurchDeptController;
use App\Http\Controllers\DokumenManagerPurchDeptController;
use App\Http\Controllers\DokumenTypeManagerPurchDeptController;
use App\Http\Controllers\DokumenSiteLocationManagerPurchDeptController;
use App\Http\Controllers\DokumenStaffPurchDeptController;
use App\Http\Controllers\DokumenTypeStaffPurchDeptController;
use App\Http\Controllers\DokumenSiteLocationStaffPurchDeptController;
use App\Http\Controllers\DokumenOperatorController;
use App\Http\Controllers\DokumenTypeOperatorController;
use App\Http\Controllers\DokumenSiteLocationOperatorController;
use App\Http\Controllers\CasesAdminController;
use App\Http\Controllers\CasesDirekturExportDeptController;
use App\Http\Controllers\CasesManagerExportDeptController;
use App\Http\Controllers\CasesStaffExportDeptController;

use App\Http\Controllers\CasesDirekturFinanceDeptController;
use App\Http\Controllers\CasesManagerFinanceDeptController;
use App\Http\Controllers\CasesStaffFinanceDeptController;

use App\Http\Controllers\CasesDirekturHrDeptController;
use App\Http\Controllers\CasesManagerHrDeptController;
use App\Http\Controllers\CasesStaffHrDeptController;

use App\Http\Controllers\CasesDirekturLegalDeptController;
use App\Http\Controllers\CasesManagerLegalDeptController;
use App\Http\Controllers\CasesStaffLegalDeptController;

use App\Http\Controllers\CasesDirekturITDeptController;
use App\Http\Controllers\CasesManagerITDeptController;
use App\Http\Controllers\CasesStaffITDeptController;

use App\Http\Controllers\CasesDirekturPurchDeptController;
use App\Http\Controllers\CasesManagerPurchDeptController;
use App\Http\Controllers\CasesStaffPurchDeptController;

use App\Http\Controllers\CasesOperatorController;

//casesType
use App\Http\Controllers\CasesTypeAdminController;

use App\Http\Controllers\CasesTypeDirekturITController;
use App\Http\Controllers\CasesTypeManagerITController;
use App\Http\Controllers\CasesTypeStaffITController;

use App\Http\Controllers\CasesTypeDirekturExportController;
use App\Http\Controllers\CasesTypeManagerExportController;
use App\Http\Controllers\CasesTypeStaffExportController;

use App\Http\Controllers\CasesTypeDirekturFinanceController;
use App\Http\Controllers\CasesTypeManagerFinanceController;
use App\Http\Controllers\CasesTypeStaffFinanceController;

use App\Http\Controllers\CasesTypeDirekturHrController;
use App\Http\Controllers\CasesTypeManagerHrController;
use App\Http\Controllers\CasesTypeStaffHrController;

use App\Http\Controllers\CasesTypeDirekturLegalController;
use App\Http\Controllers\CasesTypeManagerLegalController;
use App\Http\Controllers\CasesTypeStaffLegalController;

use App\Http\Controllers\CasesTypeDirekturPurchController;
use App\Http\Controllers\CasesTypeManagerPurchController;
use App\Http\Controllers\CasesTypeStaffPurchController;

use App\Http\Controllers\CasesTypeOperatorController;





use App\Http\Controllers\DokumenExpiredOperatorController;
use App\Http\Controllers\DokumenExpiredController;
use App\Http\Controllers\DokumenExpiredDirekturExportController;
use App\Http\Controllers\DokumenExpiredManagerExportController;
use App\Http\Controllers\DokumenExpiredStaffExportController;

use App\Http\Controllers\DokumenExpiredDirekturFinanceController;
use App\Http\Controllers\DokumenExpiredManagerFinanceController;
use App\Http\Controllers\DokumenExpiredStaffFinanceController;


use App\Http\Controllers\DokumenExpiredDirekturHrController;
use App\Http\Controllers\DokumenExpiredManagerHrController;
use App\Http\Controllers\DokumenExpiredStaffHrController;

use App\Http\Controllers\DokumenExpiredDirekturPurchController;
use App\Http\Controllers\DokumenExpiredManagerPurchController;
use App\Http\Controllers\DokumenExpiredStaffPurchController;

use App\Http\Controllers\DokumenExpiredDirekturLegalController;
use App\Http\Controllers\DokumenExpiredManagerLegalController;
use App\Http\Controllers\DokumenExpiredStaffLegalController;

use App\Http\Controllers\DokumenExpiredDirekturITController;
use App\Http\Controllers\DokumenExpiredManagerITController;
use App\Http\Controllers\DokumenExpiredStaffITController;
use App\Http\Controllers\LoginHistoryController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dokumenAdmin', DokumenAdminController::class);
    Route::resource('/dokumenTypeAdmin', DokumenTypeAdminController::class);
    Route::resource('/siteLocationAdmin', DokumenSiteLocationAdminController::class);
    Route::resource('/dokumenDirekturIT', DokumenDirekturITController::class);
    Route::resource('/TypedirekturIT', DokumenTypeDirekturITController::class);
    Route::resource('/siteLocationDirekturIT', DokumenSitelocationDirekturITDeptController::class);
    Route::resource('/dokumenManagerIT', DokumenManagerITDeptController::class);
    Route::resource('/dokumenTypeManagerIT', DokumenTypeManagerITDeptController::class);
    Route::resource('/siteLocationManagerIT', DokumenSiteLocationAdminController::class);
    Route::resource('/dokumenStaffIT', DokumenStaffITDeptController::class);
    Route::resource('/dokumenTypeStaffIT',DokumenTypeStaffITDeptController::class);
    Route::resource('/siteLocationStaffIT', DokumenSiteLocationStaffITDeptController::class);
    Route::resource('/dokumenDirekturlegalDept', DokumenDirekturLegalDeptController::class);
    Route::resource('/dokumenTypeDirekturLegalDept',  DokumenTypeDirekturLegalDeptController::class);
    Route::resource('/siteLocationDirekturLegalDept', DokumenSiteLocationDirekturLegalDeptController::class);
    Route::resource('/dokumenManagerlegalDept', DokumenManagerLegalDeptController::class);
    Route::resource('/dokumenTypeManagerLegalDept',  DokumenTypeManagerLegalDeptController::class);
    Route::resource('/siteLocationManagerLegalDept', DokumenSiteLocationManagerLegalDeptController::class);
    Route::resource('/StafflegalDept', DokumenStaffLegalDeptController::class);
    Route::resource('/dokumenTypeStaffLegalDept', DokumenTypeStaffLegalDeptController::class);
    Route::resource('/siteLocationStaffLegalDept', DokumenSiteLocationStaffLegalDeptController::class);
    Route::resource('/dokumenDirekturHrDept', DokumenDirekturHrDeptController::class);
    Route::resource('/dokumenTypeDirekturHrDept',  DokumenTypeDirekturHrDeptController::class);
    Route::resource('/siteLocationDirekturHrDept',    DokumenSiteLocationDirekturHrDeptController::class);
    Route::resource('/dokumenManagerHrDept', DokumenManagerHrDeptController::class);
    Route::resource('/dokumenTypeManagerHrDept',    DokumenTypeManagerHrDeptController::class);
    Route::resource('/siteLocationManagerHrDept',    DokumenSiteLocationManagerHrDeptController::class);
    Route::resource('/dokumenStaffHrDept', DokumenStaffHrDeptController::class);
    Route::resource('/dokumenTypeStaffHrDept',     DokumenTypeStaffHrDeptController::class);
    Route::resource('/siteLocationStaffHrDept',   DokumenSiteLocationStaffHrDeptController::class);
    Route::resource('/dokumenDirekturExportDept',   DokumenDirekturExportDeptController::class); 
    Route::resource('/dokumenTypeDirekturExportDept',  DokumenTypeDirekturExportDeptController::class);
    Route::resource('/siteLocationDirekturExportDept',   DokumenSiteLocationDirekturExprtDeptController::class);
    Route::resource('/dokumenManagerExportDept',   DokumenManagerExportDeptController::class); 
    Route::resource('/TypeManagerExportDept',     DokumenTypeManagerExportDeptController::class);
    Route::resource('/siteLocationManagerExportDept',   DokumenSiteLocationManagerExprtDeptController::class);
    Route::resource('/dokumenStaffExportDept',       DokumenStaffExportDeptController::class); 
    Route::resource('/TypeStaffExportDept',      DokumenTypeStaffExportDeptController::class);
    Route::resource('/siteLocationStaffExportDept',      DokumenSiteLocationStaffExprotDeptController::class);
    Route::resource('/dokumenDirekturFinanceDept', DokumenDirekturFinanceDeptController::class);
    Route::resource('/dokumenTypeDirekturFinanceDept',   DokumenTypeDirekturFinanceDeptController::class);
    Route::resource('/siteLocationDirekturFinanceDept',   DokumenSiteLocationDirekturFinanceDeptController::class);
    Route::resource('/dokumenManagerFinanceDept', DokumenManagerFinanceDeptController::class);
    Route::resource('/TypeManagerFinanceDept',     DokumenTypeManagerFinanceDeptController::class);
    Route::resource('/siteLocationManagerFinanceDept',   DokumenSiteLocationManagerFinanceDeptController::class);
    Route::resource('/dokumenStaffFinanceDept', DokumenStaffFinanceDeptController::class);
    Route::resource('/TypeStaffFinanceDept',     DokumenTypeStaffFinanceDeptController::class);
    Route::resource('/siteLocationStaffFinanceDept',    DokumenSiteLocationStaffFinanceDeptController::class);
    Route::resource('/dokumenDirekturPurchDept',    DokumenDirekturPurchDeptController::class);
    Route::resource('/dokumenTypeDirekturPurchDept',     DokumenTypeDirekturPurchDeptController::class);
    Route::resource('/siteLocationDirekturPurchDept',   DokumenSiteLocationDirekturPurchDeptController::class);
    Route::resource('/dokumenManagerPurchDept', DokumenManagerPurchDeptController::class);
    Route::resource('/dokumenTypeManagerPurchDept',    DokumenTypeManagerPurchDeptController::class);
    Route::resource('/siteLocationManagerPurchDept',    DokumenSiteLocationManagerPurchDeptController::class);
    Route::resource('/dokumenStaffPurchDept', DokumenStaffPurchDeptController::class);
    Route::resource('/dokumenTypeStaffPurchDept',    DokumenTypeStaffPurchDeptController::class);
    Route::resource('/siteLocationStaffPurchDept',    DokumenSiteLocationStaffPurchDeptController::class);
    Route::resource('/dokumenOperator', DokumenOperatorController::class);
    Route::resource('/dokumenTypeOperator', DokumenTypeOperatorController::class);
    Route::resource('/siteLocationOperator', DokumenSiteLocationOperatorController::class);

    //cases
    Route::resource('/casesAdmin', CasesAdminController::class);
    Route::resource('/casesTypeAdmin', CasesTypeAdminController::class);
    Route::resource('/casesDirekturExportDept', CasesDirekturExportDeptController::class);
    Route::resource('/casesManagerExportDept', CasesManagerExportDeptController::class);
    Route::resource('/casesStaffExportDept', CasesStaffExportDeptController::class);

    Route::resource('/casesDirekturFinanceDept',CasesDirekturFinanceDeptController::class);
    Route::resource('/casesManagerFinanceDept', CasesManagerFinanceDeptController::class);
    Route::resource('/casesStaffFinanceDept', CasesStaffFinanceDeptController::class);
    

    Route::resource('/casesDirekturHrDept', CasesDirekturHrDeptController::class);
    Route::resource('/casesManagerHrDept', CasesManagerHrDeptController::class);
    Route::resource('/casesStaffHrDept', CasesStaffHrDeptController::class);

    Route::resource('/casesDirekturLegalDept', CasesDirekturLegalDeptController::class);
    Route::resource('/casesManagerLegalDept', CasesManagerLegalDeptController::class);
    Route::resource('/casesStaffLegalDept', CasesStaffLegalDeptController::class);
    
    Route::resource('/casesDirekturITDept', CasesDirekturITDeptController::class);
    Route::resource('/casesManagerITDept', CasesManagerITDeptController::class);
    Route::resource('/casesStaffITDept', CasesStaffITDeptController::class);
    

     
    Route::resource('/casesDirekturPurchDept', CasesDirekturPurchDeptController::class);
    Route::resource('/casesManagerPurchDept', CasesManagerPurchDeptController::class);
    Route::resource('/casesStaffPurchDept', CasesStaffPurchDeptController::class);

    Route::resource('/casesOperator', CasesOperatorController::class);

/// Type
    Route::resource('/casesTypeAdmin', CasesTypeAdminController::class);

    Route::resource('/casesTypeDirekturIT',   CasesTypeDirekturITController::class);
    Route::resource('/casesTypeManagerIT',   CasesTypeManagerITController::class);
    Route::resource('/casesTypeStaffIT',   CasesTypeStaffITController::class);
   
   Route::resource('/casesTypeDirekturExport',   CasesTypeDirekturExportController::class);
    Route::resource('/casesTypeManagerExport',   CasesTypeManagerExportController::class);
    Route::resource('/casesTypeStaffExport',   CasesTypeStaffExportController::class);

     Route::resource('/casesTypeDirekturFinance',   CasesTypeDirekturFinanceController::class);
    Route::resource('/casesTypeManagerFinance',   CasesTypeManagerFinanceController::class);
    Route::resource('/casesTypeStaffFinance',   CasesTypeStaffFinanceController::class);
   
   Route::resource('/casesTypeDirekturHr',   CasesTypeDirekturHrController::class);
    Route::resource('/casesTypeManagerHr',   CasesTypeManagerHrController::class);
    Route::resource('/casesTypeStaffHr',   CasesTypeStaffHrController::class);

    Route::resource('/casesTypeDirekturLegal',   CasesTypeDirekturLegalController::class);
    Route::resource('/casesTypeManagerLegal',   CasesTypeManagerLegalController::class);
    Route::resource('/casesTypeStaffLegal',   CasesTypeStaffLegalController::class);


    Route::resource('/casesTypeDirekturPurch',   CasesTypeDirekturPurchController::class);
    Route::resource('/casesTypeManagerPurch',   CasesTypeManagerPurchController::class);
    Route::resource('/casesTypeStaffPurch',   CasesTypeStaffPurchController::class);
   
    Route::resource('/casesTypeOperator', CasesTypeOperatorController::class);
   
   
    //Expired

    Route::resource('/dokumenExpiredAdmin', DokumenExpiredController::class);

    Route::resource('/dokumenExpiredOperator', DokumenExpiredController::class);

    Route::resource('/dokumenExpiredDirekturexport',  DokumenExpiredDirekturExportController::class);
    Route::resource('/dokumenExpiredManagerexport',  DokumenExpiredManagerExportController::class);
    Route::resource('/dokumenExpiredStaffexport',  DokumenExpiredStaffExportController::class);

    Route::resource('/dokumenExpiredDirekturFinance',  DokumenExpiredDirekturFinanceController::class);
    Route::resource('/dokumenExpiredManagerFinance',  DokumenExpiredManagerFinanceController::class);
    Route::resource('/dokumenExpiredStaffFinance',  DokumenExpiredStaffFinanceController::class);

    Route::resource('/dokumenExpiredDirekturHr',  DokumenExpiredDirekturFinanceController::class);
    Route::resource('/dokumenExpiredManagerHr',  DokumenExpiredManagerFinanceController::class);
    Route::resource('/dokumenExpiredStaffHr',  DokumenExpiredStaffFinanceController::class);

    Route::resource('/dokumenExpiredDirekturPurch',  DokumenExpiredDirekturpurchController::class);
    Route::resource('/dokumenExpiredManagerPurch',  DokumenExpiredManagerPurchController::class);
    Route::resource('/dokumenExpiredStaffPurch',  DokumenExpiredStaffPurchController::class);

    Route::resource('/dokumenExpiredDirekturLegal',  DokumenExpiredDirekturLegalController::class);
    Route::resource('/dokumenExpiredManagerLegal',  DokumenExpiredManagerLegalController::class);
    Route::resource('/dokumenExpiredStaffLegal',  DokumenExpiredStaffLegalController::class);

    Route::resource('/dokumenExpiredDirekturIT',  DokumenExpiredDirekturITController::class);
    Route::resource('/dokumenExpiredManagerIT',  DokumenExpiredManagerITController::class);
    Route::resource('/dokumenExpiredStaffIT',  DokumenExpiredStaffITController::class);

    Route::resource('/loginHistory',  LoginHistoryController::class);





    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
