@extends('layouts.sidebarAdmin')

@section('content')
<form method="POST" action="{{ url('makeInvestasiAdmin') }}" enctype="multipart/form-data">
@csrf
  <div class="w-75 mx-auto my-5 card shadow p-5">
    <p class="fw-bold h4 text-center">PLAN</p>
    <div class="mb-3">
      <label class="form-label">Nama: </label>
      <input class="form-control" name="nama" type="text" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Durasi: </label>
      <input class="form-control" name="durasi" type="number" min="0" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Period: </label>
      <select class="form-control" name="period" required>
        <option value="" disabled selected>-- Select --</option>
        <option value="1">Day - 1 Days</option>
        <option value="7">Week - 7 Days</option>
        <option value="30">Month - 30 Days</option>
        <option value="365">Year - 365 Days</option> 
      </select>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Kategori: </label>
      <select class="form-control" name="kategori" required>
        <option value="" disabled selected>-- Select --</option>
        <option value="Saham">Saham</option>
        <option value="Sukuk">Sukuk</option> 
      </select>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Jenis: </label>
      <input class="form-control" name="jenis" type="text" list="jenisLists" required>
      <datalist id="jenisLists">
        <option value="Peternakan Ayam">
        <option value="Peternakan Sapi">
        <option value="Peternakan Kambing"> 
        <option value="Peternakan Kerbau"> 
        <option value="Peternakan Lele"> 
        <option value="Peternakan Babi"> 
      </datalist>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Interest: </label>
      <input class="form-control" name="interest" type="text" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Harga: </label>
      <input class="form-control" name="harga" type="number" min="0" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Lembar: </label>
      <input class="form-control" name="lembar" type="number" min="0" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Start Date: </label>
      <input class="form-control" name="start_date" type="date" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Location: </label>
      <input class="form-control" name="location" type="text" required>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Status: </label>
      <select class="form-control" name="status" required>
        <option value="" disabled selected>-- Select --</option>
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option> 
      </select>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Asuransi: </label>
      <select class="form-control" name="asuransi" required>
        <option value="" disabled selected>-- Select --</option>
        <option value="Iya">Iya</option>
        <option value="Tidak">Tidak</option> 
      </select>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Referral Percent: </label>
      <input class="form-control" name="referral_percent" type="text" required>
    </div> 
    
    <div class="mb-3">
      <label class="form-label">Poto: </label>
      <input class="form-control" name="poto" type="file" required>
    </div> 
    
    <div class="mb-3">
      <label class="form-label">Keterangan: </label>
      <textarea class="form-control" name="keterangan" ></textarea>
    </div>  

    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>

@endsection