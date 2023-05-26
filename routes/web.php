<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestasiController;
use App\Http\Controllers\KataSandiController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PeternakController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

// NAVBAR ====================================== <>
Route::get('/',         [CommonController::class, 'home_index'])->name('home.main');
Route::get('/about_us', [CommonController::class, 'about_us_index'])->name('home.about');
Route::get('/FAQ',      [CommonController::class, 'FAQ_index'])->name('home.FAQ');
Route::get('/blog',     [CommonController::class, 'blog_index'])->name('home.blog');

// MAIN ========================================= <>  

// ALL ACCESS
Route::get('/detail-peternakan/{id}',    [CommonController::class, 'detail_peternakan_index']);

// UMUM ACCESS
Route::middleware(['auth', 'verified', 'aktif'])->group(function () {
    Route::get('/dashboard',            [CommonController::class, 'ringkasan_index']);  

    Route::get('/deposit',              [DepositController::class, 'deposit_index']);            
    Route::post('/deposit/in',          [DepositController::class, 'depositIn']);               
    
    Route::get('/penarikan',            [PenarikanController::class, 'penarikan_index']);
    Route::post('/penarikan/create',    [PenarikanController::class, 'create']);


    Route::get('/investasi-detail/{id}', [InvestasiController::class, 'investasi_detail_index']);    
    Route::post('/beli_investasi/{id}', [InvestasiController::class, 'beli_investasi']);    
    Route::get('/semua_bisnis',         [InvestasiController::class, 'semua_bisnis_index']);
    Route::get('/investasi-segera',     [InvestasiController::class, 'investasi_segera_index']);  
    Route::get('/investasi-selesai',    [InvestasiController::class, 'investasi_selesai_index']);
    Route::get('/investasi-diikuti',    [InvestasiController::class, 'investasi_diikuti_index']);

    Route::get('/aktivitas',            [CommonController::class, 'aktivitas_index']);   

    Route::get('/pertanyaan',           [PertanyaanController::class, 'pertanyaan_index']);
    Route::post('/pertanyaan/create',   [PertanyaanController::class, 'create']);
    Route::post('/pertanyaan/createReply/{id}', [PertanyaanController::class, 'createReply']);
    Route::get('/pertanyaan/{id}',      [PertanyaanController::class, 'detail']);
    Route::get('/pertanyaan/delete/{id}', [PertanyaanController::class, 'delete']);

    Route::get('/pengaturan',           [CommonController::class, 'pengaturan_index']);
    Route::get('/profil',               [ProfilController::class, 'profil_index']);         
    Route::post('/profil/update/{id}',  [ProfilController::class, 'profil_update']);     
    Route::post('/profil/update/photo/{id}',  [ProfilController::class, 'profil_update_photo']);      
    Route::get('/profil/delete/{id}',   [ProfilController::class, 'profil_delete'])->name('sidebar.profil.delete');         

    Route::get('/log_audit',            [CommonController::class, 'log_audit_index'])->name('sidebar.log_audit');       

    Route::get('/kata_sandi',           [KataSandiController::class, 'kata_sandi_index'])->name('sidebar.kata_sandi');  
    Route::post('/kata_sandi/update',    [KataSandiController::class, 'kata_sandi_update'])->name('sidebar.kata_sandi.update');         

    Route::get('/verifikasi_identitas', [CommonController::class, 'verifikasi_identitas_index'])->name('sidebar.verifikasi_identitas'); 


// PETERNAK ACCESS
    Route::get('/dashboardPeternak', [PeternakController::class, 'dashboard']); 
    Route::get('/pengajuan', [PeternakController::class, 'pengajuan']); 
    Route::post('/add_bisnis', [PeternakController::class, 'add_bisnis']); 
});

// ADMIN ========================================= <>
Route::middleware(['admin', 'auth', 'aktif'])->group(function () {
    Route::get('/dashboardAdmin',       [AdminController::class, 'ringkasan_index'])->name('sidebarADM.ringkasan');     // FRONTEND:✘ BACKEND:✘
    Route::get('/penggunaAdmin',        [AdminController::class, 'pengguna_index'])->name('sidebarADM.pengguna');       // FRONTEND:✘ BACKEND:✘
    Route::get('/broadcastEmailAdmin',  [AdminController::class, 'broadcastEmail_index'])->name('sidebarADM.broadcastEmail');   // FRONTEND:✘ BACKEND:✘
    Route::get('/pesanAdmin',           [AdminController::class, 'pesan_index'])->name('sidebarADM.pesan');             // FRONTEND:✘ BACKEND:✘
    Route::get('/depositTransaksiAdmin', [AdminController::class, 'depositTransaksi_index'])->name('sidebarADM.deposit');         // FRONTEND:✘ BACKEND:✘
    Route::get('/depositPengaturanAdmin', [AdminController::class, 'depositPengaturan_index'])->name('sidebarADM.deposit');         // FRONTEND:✘ BACKEND:✘
    Route::post('/depositPengaturanAdmin/updateBankAdmin', [AdminController::class, 'updateBankAdmin']);         // FRONTEND:✘ BACKEND:✘

    Route::get('/penarikanTransaksiAdmin',  [AdminController::class, 'penarikanTransaksi_index']);     // FRONTEND:✘ BACKEND:✘
    Route::get('/penarikanPengaturanAdmin',  [AdminController::class, 'penarikanPengaturan_index']);     // FRONTEND:✘ BACKEND:✘

    Route::get('/investasiAdmin',       [AdminController::class, 'investasi_index'])->name('sidebarADM.investasi');     // FRONTEND:✘ BACKEND:✘
    Route::get('/listBisnisAdmin',      [AdminController::class, 'listBisnis_index']);    // FRONTEND:✘ BACKEND:✘
    Route::get('/createInvestasiAdmin', [AdminController::class, 'createInvestasi_index']);    // FRONTEND:✘ BACKEND:✘
    Route::post('/makeInvestasiAdmin',  [AdminController::class, 'makeInvestasi_index']);    // FRONTEND:✘ BACKEND:✘

    Route::get('/blogAdmin',            [AdminController::class, 'blog_index'])->name('sidebarADM.blog');               // FRONTEND:✘ BACKEND:✘

    // ACCEPTING
    Route::get('/acceptAkun/{id}',      [AdminController::class, 'akunAccept']);
    Route::get('/NoAcceptAkun/{id}',    [AdminController::class, 'akunNoAccept']);
    Route::get('/acceptInvestasi/{id}',      [AdminController::class, 'acceptInvestasi']);
    Route::get('/noAcceptInvestasi/{id}',    [AdminController::class, 'noAcceptInvestasi']);
    Route::get('/acceptDeposit/{id}',   [AdminController::class, 'depositAccept']);
    Route::get('/acceptPenarikan/{id}', [AdminController::class, 'penarikanAccept']);
});
