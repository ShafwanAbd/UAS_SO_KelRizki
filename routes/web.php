<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\KataSandiController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\PertanyaanController;
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

Auth::routes();

// NAVBAR ====================================== <>
Route::get('/',         [CommonController::class, 'home_index'])->name('home.main');
Route::get('/about_us', [CommonController::class, 'about_us_index'])->name('home.about');
Route::get('/FAQ',      [CommonController::class, 'FAQ_index'])->name('home.FAQ');
Route::get('/blog',     [CommonController::class, 'blog_index'])->name('home.blog');

// MAIN ========================================= <>  

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',            [CommonController::class, 'ringkasan_index'])->name('sidebar.ringkasan');   // FRONTEND:✘ BACKEND:✘
    Route::get('/deposit',              [DepositController::class, 'deposit_index'])->name('deposit');              // FRONTEND:✘ BACKEND:✘
    Route::post('/deposit/in',          [DepositController::class, 'depositIn'])->name('depositIn');                // FRONTEND:✘ BACKEND:✘
    Route::get('/penarikan',            [PenarikanController::class, 'penarikan_index'])->name('sidebar.penarikan');// FRONTEND:✘ BACKEND:✘
    Route::post('/penarikan/create',    [PenarikanController::class, 'create'])->name('sidebar.penarikan.create');  // FRONTEND:✘ BACKEND:✘
    Route::get('/investasi',            [CommonController::class, 'investasi_index'])->name('sidebar.investasi');   // FRONTEND:✘ BACKEND:✘
    Route::get('/semua_bisnis',         [CommonController::class, 'semua_bisnis_index'])->name('sidebar.semua_bisnis'); // FRONTEND:✘ BACKEND:✘
    Route::get('/investasi-segera',         [CommonController::class, 'investasi_segera_index'])->name('sidebar.investasi_segera');     // FRONTEND:✘ BACKEND:✘
    Route::get('/investasi-selesai',         [CommonController::class, 'investasi_selesai_index'])->name('sidebar.investasi_selesai');  // FRONTEND:✘ BACKEND:✘
    Route::get('/investasi-diikuti',         [CommonController::class, 'investasi_diikuti_index'])->name('sidebar.investasi_diikuti');  // FRONTEND:✘ BACKEND:✘
    Route::get('/aktivitas',            [CommonController::class, 'aktivitas_index'])->name('sidebar.aktivitas');       // FRONTEND:✘ BACKEND:✘
    Route::get('/pertanyaan',           [PertanyaanController::class, 'pertanyaan_index'])->name('sidebar.pertanyaan'); // FRONTEND:✘ BACKEND:✘
    Route::post('/pertanyaan/create',   [PertanyaanController::class, 'create'])->name('sidebar.pertanyaan.create');    // FRONTEND:✘ BACKEND:✘
    Route::post('/pertanyaan/createReply/{id}', [PertanyaanController::class, 'createReply'])->name('sidebar.createReply'); // FRONTEND:✘ BACKEND:✘
    Route::get('/pertanyaan/{id}',      [PertanyaanController::class, 'detail'])->name('sidebar.pertanyaan.detail');    // FRONTEND:✘ BACKEND:✘
    Route::get('/pertanyaan/delete/{id}', [PertanyaanController::class, 'delete'])->name('sidebar.pertanyaan.detail');  // FRONTEND:✘ BACKEND:✘
    Route::get('/pengaturan',           [CommonController::class, 'pengaturan_index'])->name('sidebar.pengaturan');     // FRONTEND:✘ BACKEND:✘
    Route::get('/profil',               [ProfilController::class, 'profil_index'])->name('sidebar.profil');             // FRONTEND:✘ BACKEND:✘
    Route::post('/profil/update/{id}',  [ProfilController::class, 'profil_update'])->name('sidebar.profil.update');     // FRONTEND:✘ BACKEND:✘   
    Route::post('/profil/update/photo/{id}',  [ProfilController::class, 'profil_update_photo'])->name('sidebar.profil.update');     // FRONTEND:✘ BACKEND:✘   
    Route::get('/profil/delete/{id}',   [ProfilController::class, 'profil_delete'])->name('sidebar.profil.delete');     // FRONTEND:✘ BACKEND:✘    
    Route::get('/log_audit',            [CommonController::class, 'log_audit_index'])->name('sidebar.log_audit');       // FRONTEND:✘ BACKEND:✘
    Route::get('/kata_sandi',           [KataSandiController::class, 'kata_sandi_index'])->name('sidebar.kata_sandi');  // FRONTEND:✘ BACKEND:✘
    Route::post('/kata_sandi/update',    [KataSandiController::class, 'kata_sandi_update'])->name('sidebar.kata_sandi.update');         // FRONTEND:✘ BACKEND:✘
    Route::get('/verifikasi_identitas', [CommonController::class, 'verifikasi_identitas_index'])->name('sidebar.verifikasi_identitas'); // FRONTEND:✘ BACKEND:✘
});     


Route::middleware(['admin', 'auth'])->group(function () { 
    Route::get('/dashboardAdmin',       [AdminController::class, 'ringkasan_index'])->name('sidebarADM.ringkasan');     // FRONTEND:✘ BACKEND:✘
    Route::get('/penggunaAdmin',        [AdminController::class, 'pengguna_index'])->name('sidebarADM.pengguna');       // FRONTEND:✘ BACKEND:✘
    Route::get('/broadcastEmailAdmin',  [AdminController::class, 'broadcastEmail_index'])->name('sidebarADM.broadcastEmail');   // FRONTEND:✘ BACKEND:✘
    Route::get('/pesanAdmin',           [AdminController::class, 'pesan_index'])->name('sidebarADM.pesan');             // FRONTEND:✘ BACKEND:✘
    Route::get('/depositTransaksiAdmin',[AdminController::class, 'depositTransaksi_index'])->name('sidebarADM.deposit');         // FRONTEND:✘ BACKEND:✘
    Route::get('/depositPengaturanAdmin',[AdminController::class, 'depositPengaturan_index'])->name('sidebarADM.deposit');         // FRONTEND:✘ BACKEND:✘
    Route::post('/depositPengaturanAdmin/updateBankAdmin', [AdminController::class, 'updateBankAdmin']);         // FRONTEND:✘ BACKEND:✘
    Route::get('/penarikanTransaksiAdmin',  [AdminController::class, 'penarikanTransaksi_index']);     // FRONTEND:✘ BACKEND:✘
    Route::get('/penarikanPengaturanAdmin',  [AdminController::class, 'penarikanPengaturan_index']);     // FRONTEND:✘ BACKEND:✘
    Route::get('/investasiAdmin',       [AdminController::class, 'investasi_index'])->name('sidebarADM.investasi');     // FRONTEND:✘ BACKEND:✘
    Route::get('/blogAdmin',            [AdminController::class, 'blog_index'])->name('sidebarADM.blog');               // FRONTEND:✘ BACKEND:✘

    // ACCEPTING
    Route::get('/acceptAkun/{id}',      [AdminController::class, 'akunAccept']);
    Route::get('/NoAcceptAkun/{id}',    [AdminController::class, 'akunNoAccept']);
    Route::get('/acceptDeposit/{id}',   [AdminController::class, 'depositAccept']);
}); 
