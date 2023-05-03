@extends('layouts.sidebarAdmin')

@section('content')
<form method="POST" action="{{ url('makeInvestasiAdmin') }}" enctype="multipart/form-data">
@csrf
  <div class="flex">
    <label>Nama: </label>
    <input name="nama" type="text" required>
  </div>
  
  <div class="flex">
    <label>Durasi: </label>
    <input name="durasi" type="number" min="0" step="5" required>
  </div>
  
  <div class="flex">
    <label>Period: </label>
    <select name="period" required>
      <option value="" disabled selected>-- Select --</option>
      <option value="1">Day - 1 Days</option>
      <option value="7">Week - 7 Days</option>
      <option value="30">Month - 30 Days</option>
      <option value="365">Year - 365 Days</option> 
    </select>
  </div>
  
  <div class="flex">
    <label>Kategori: </label>
    <select name="kategori" required>
      <option value="" disabled selected>-- Select --</option>
      <option value="Saham">Saham</option>
      <option value="Sukuk">Sukuk</option> 
    </select>
  </div>
  
  <div class="flex">
    <label>Interest: </label>
    <input name="interest" type="text" required>
  </div>
  
  <div class="flex">
    <label>Harga: </label>
    <input name="harga" type="number" step="10000" min="0" required>
  </div>
  
  <div class="flex">
    <label>Lembar: </label>
    <input name="lembar" type="number" min="0" step="5" required>
  </div>
  
  <div class="flex">
    <label>Start Date: </label>
    <input name="start_date" type="date" required>
  </div>
  
  <div class="flex">
    <label>Location: </label>
    <input name="location" type="text" required>
  </div>
  
  <div class="flex">
    <label>Status: </label>
    <select name="status" required>
      <option value="" disabled selected>-- Select --</option>
      <option value="1">Aktif</option>
      <option value="0">Tidak Aktif</option> 
    </select>
  </div>
  
  <div class="flex">
    <label>Asuransi: </label>
    <select name="asuransi" required>
      <option value="" disabled selected>-- Select --</option>
      <option value="Iya">Iya</option>
      <option value="Tidak">Tidak</option> 
    </select>
  </div>
  
  <div class="flex">
    <label>Referral Percent: </label>
    <input name="referral_percent" type="text" required>
  </div> 
  
  <div class="flex">
    <label>Poto: </label>
    <input name="poto" type="file" required>
  </div> 
  
  <div class="flex">
    <label>Keterangan: </label>
    <textarea name="keterangan" ></textarea>
  </div>  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection