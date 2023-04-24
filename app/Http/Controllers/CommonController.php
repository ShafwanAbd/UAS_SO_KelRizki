<?php

namespace App\Http\Controllers;

use App\Models\AdminBank;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function home_index()
    {
        return view('home');
    }

    public function about_us_index()
    {
        return view('navbar.about_us');
    }

    public function FAQ_index()
    {
        return view('navbar.FAQ');
    }

    public function blog_index()
    {
        return view('navbar.blog');
    }

    public function dashboard_index()
    {
        return view('main.dashboard');
    }

    public function ringkasan_index()
    {
        return view('main.ringkasan');
    }

    public function penarikan_index()
    {
        return view('main.penarikan');
    }

    public function investasi_index()
    {
        return view('main.investasi');
    }

    public function semua_bisnis_index()
    {
        return view('main.semua_bisnis');
    }

    public function aktivitas_index()
    {
        return view('main.aktivitas');
    }

    public function pengaturan_index()
    {
        return view('main.pengaturan');
    } 
    
    public function log_audit_index()
    {
        return view('main.log_audit');
    }

    public function verifikasi_identitas_index()
    {
        return view('main.verifikasi_identitas');
    }
}
