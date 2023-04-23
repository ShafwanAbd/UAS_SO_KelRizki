<?php

use App\Http\Controllers\CommonController;
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
Route::get('/',         [CommonController::class, 'home_index']);
Route::get('/about_us', [CommonController::class, 'about_us_index']);
Route::get('/FAQ',      [CommonController::class, 'FAQ_index']);
Route::get('/blog',     [CommonController::class, 'blog_index']);

// MAIN ========================================= <>
Route::get('/dashboard', [CommonController::class, 'dashboard_index']);

// SIDEBAR ======================================= <>
Route::get('/ringkasan',    [CommonController::class, 'ringkasan_index']);
Route::get('/penarikan',    [CommonController::class, 'penarikan_index']);
Route::get('/investasi',    [CommonController::class, 'investasi_index']);      // HAS DROPDOWN a <>
Route::get('/semua_bisnis', [CommonController::class, 'semua_bisnis_index']);   // a 1
Route::get('/aktivitas',    [CommonController::class, 'aktivitas_index']);      // a 2
Route::get('/pertanyaan',   [CommonController::class, 'pertanyaan_index']);
Route::get('/pengaturan',   [CommonController::class, 'pengaturan_index']);     // HAS DROPDOWN b <>
Route::get('/profil',       [CommonController::class, 'profil_index']);         // b 1
Route::get('/log_audit',    [CommonController::class, 'log_audit_index']);      // b 2
Route::get('/kata_sandi',   [CommonController::class, 'kata_sandi_index']);     // b 3
Route::get('/verifikasi_identitas', [CommonController::class, 'verifikasi_identitas_index']); // b 4

Route::middleware(['auth'])->group(function(){
});