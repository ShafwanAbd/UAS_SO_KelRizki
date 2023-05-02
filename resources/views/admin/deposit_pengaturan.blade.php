@extends('layouts.sidebarAdmin')
@section('content') 
    <div class="container_penggunaAdmin container_depositPengaturan">
        <div class="container_isi">
            <h2>Bank Transfer Details</h2>
            <div class="container_form">
                <div class="container_input">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="name" value="{{ $adminbank->name }}">
                </div>
                <div class="container_input">
                    <label>Nama Bank</label>
                    <input type="text" name="bankName" value="{{ $adminbank->bankName }}">
                </div>
                <div class="container_input">
                    <label>Address Bank</label>
                    <input type="text" name="address" value="{{ $adminbank->address }}">
                </div>
                <div class="container_input">
                    <label>Kode IBAN</label>
                    <input type="text" name="iban" value="{{ $adminbank->iban }}">
                </div>
                <div class="container_input">
                    <label>Kode Swift</label>
                    <input type="text" name="swift" value="{{ $adminbank->swift }}">
                </div>
                <div class="container_input">
                    <label>Nomer Akun</label>
                    <input type="text" name="acct_no" value="{{ $adminbank->acct_no }}">
                </div> 
                <a href="#" class="btn btn-primary">Memperbaharui</a>
            </div>
        </div>
    </div>
@endsection