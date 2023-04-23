<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\PertanyaanController;
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
Route::get('/dashboard', [CommonController::class, 'dashboard_index'])->name('main.dashboard');;

// SIDEBAR ======================================= <>
Route::get('/dashboard',        [CommonController::class, 'ringkasan_index'])->name('sidebar.ringkasan');
Route::get('/deposit',        [CommonController::class, 'deposit_index'])->name('deposit');
Route::get('/penarikan',        [CommonController::class, 'penarikan_index'])->name('sidebar.penarikan');
Route::get('/investasi',        [CommonController::class, 'investasi_index'])->name('sidebar.investasi');    // HAS DROPDOWN a <>
Route::get('/semua_bisnis', [CommonController::class, 'semua_bisnis_index'])->name('sidebar.semua_bisnis'); // a 1
Route::get('/aktivitas',    [CommonController::class, 'aktivitas_index'])->name('sidebar.aktivitas');    // a 2
Route::get('/pertanyaan',       [PertanyaanController::class, 'pertanyaan_index'])->name('sidebar.pertanyaan');
Route::post('/pertanyaan/create', [PertanyaanController::class, 'create'])->name('sidebar.pertanyaan.create');
Route::post('/pertanyaan/createReply/{id}', [PertanyaanController::class, 'createReply'])->name('sidebar.pertanyaan.createReply');
Route::get('/pertanyaan/{id}', [PertanyaanController::class, 'detail'])->name('sidebar.pertanyaan.detail');
Route::get('/pertanyaan/delete/{id}', [PertanyaanController::class, 'delete'])->name('sidebar.pertanyaan.detail');
Route::get('/pengaturan',       [CommonController::class, 'pengaturan_index'])->name('sidebar.pengaturan'); // HAS DROPDOWN b <>
Route::get('/profil',       [CommonController::class, 'profil_index'])->name('sidebar.profil');     // b 1
Route::get('/log_audit',    [CommonController::class, 'log_audit_index'])->name('sidebar.log_audit');  // b 2
Route::get('/kata_sandi',   [CommonController::class, 'kata_sandi_index'])->name('sidebar.kata_sandi'); // b 3
Route::get('/verifikasi_identitas', [CommonController::class, 'verifikasi_identitas_index'])->name('sidebar.verifikasi_identitas'); // b 4

Route::middleware(['auth'])->group(function () {
});
