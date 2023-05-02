@extends('layouts.sidebarAdmin')
@section('content') 
    <div class="container_penggunaAdmin container_depositPengaturan">
        <div class="container_isi">
            <h2>Bank Transfer Details</h2>
            <div class="container_form">
                <form method="POST" action="{{ url('/depositPengaturanAdmin/updateBankAdmin') }}">
                @csrf
                    <div class="container_input">
                        <label>Nama</label>
                        <input type="text" name="name" value="{{ $adminbank->name }}" placeholder="Nama" required>
                    </div>
                    <div class="container_input">
                        <label>Nama Bank</label>
                        <input type="text" name="bankName" value="{{ $adminbank->bankName }}" placeholder="Nama Bank" required>
                    </div>
                    <div class="container_input">
                        <label>Address Bank</label>
                        <input type="text" name="address" value="{{ $adminbank->address }}" placeholder="Address Bank" required>
                    </div>
                    <div class="container_input">
                        <label>Kode IBAN</label>
                        <input type="text" name="iban" value="{{ $adminbank->iban }}" placeholder="Kode IBAN" required>
                    </div>
                    <div class="container_input">
                        <label>Kode Swift</label>
                        <input type="text" name="swift" value="{{ $adminbank->swift }}" placeholder="Kode Swift">
                    </div>
                    <div class="container_input">
                        <label>Nomer Akun</label>
                        <input type="text" name="acct_no" value="{{ $adminbank->acct_no }}" placeholder="Nomer Akun" required>
                    </div> 
                    <div class="container_input_check">
                        <label>Status</label>
                        <input type="checkbox" name="status" value="1" {{ $adminbank->status == 1 ? 'checked' : '' }}>
                    </div> 
                    <button type="submit" class="btn btn-primary">Memperbaharui</button>
                </form>
            </div>
        </div>
    </div>
@endsection