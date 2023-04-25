@extends('layouts.app')

@section('content')
<div class="container">

<<<<<<< HEAD
    <div class="row mb-5">
        <div class="col-8">
            <div class="w-75 px-5">        
                <p class="h2 text-capitalize pt-5">investasi bisnis secara bersama-sama dimanapun, kapanpun secara transparan dan aman</p>
                <p class="my-3">
                    Investasi ke berbagai bisnis berkualitas, mulai dari UMKM, Waralaba, Startup hingga Proyek 
                    dengan modal kecil,transparan dan aman 
                    secara bersama-sama, karena sudah 
                    berizin serta diawasi oleh OJK.
                </p>
                <button class="w-100 rounded-pill button1"><a class="text-decoration-none btn" href="{{ route('login') }}">Mulai Investasi</a></button>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <img class="img-fluid " src="{{ asset('./image/img1.jpg')}}" alt="isi foto">
        </div>
=======
  <div class="row mb-5">
    <div class="col-8">
      <div class="w-75 px-5">
        <p class="h2 text-capitalize pt-5">investasi bisnis secara bersama-sama dimanapun, kapanpun secara transparan
          dan aman</p>
        <p class="my-3">
          Investasi ke berbagai bisnis berkualitas, mulai dari UMKM, Waralaba, Startup hingga Proyek
          dengan modal kecil,transparan dan aman
          secara bersama-sama, karena sudah
          berizin serta diawasi oleh OJK.
        </p>
        <button class="w-100 rounded-pill button1"><a class="text-decoration-none btn" href="{{ route('login') }}">Mulai
            Investasi</a></button>
      </div>
>>>>>>> 666b0fe7757e9e49d22a576cf24197af9adb2ff0
    </div>
    <div class="col-4 d-flex align-items-center text-center justify-content-center">
      <img class="border-0 px-3" src="{{ asset('./image/img1.jpg')}}" alt="isi foto" height="300px" width="500px">
    </div>
  </div>

  <div class="my-5 text-center py-5">
    <div class="w-75 mx-auto my-5">
      <p class="h2 text-capitalize">Investasi Bisnis dengan Skema Gotong Royong</p>
      <p>Mulai dari Rp 1 juta, miliki bisnis Waralaba, Restoran, Jasa, Proyek dan banyak lainnya secara bersama-sama dan
        nikmati profit bisnis atau imbal hasil secara berkala.</p>
    </div>
    <div class="row">
      <div class="col-3">
        <img src="{{ asset('./image/img1.jpg')}}" class="rounded-circle img-fluid" alt="ini gambar">
        <p class="mt-4">Waktu Pendanaan Tercepat</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./image/img1.jpg')}}" class="rounded-circle img-fluid" alt="ini gambar">
        <p class="mt-4">Total Investasi</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./image/img1.jpg')}}" class="rounded-circle img-fluid" alt="ini gambar">
        <p class="mt-4">Investor Terdaftar</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./image/img1.jpg')}}" class="rounded-circle img-fluid" alt="ini gambar">
        <p class="mt-4">Total Jumlah Penerbit</p>
      </div>
    </div>
  </div>
</div>
<<<<<<< HEAD
<div class="row py-5 mx-0">
    <div class="col color1 py-5">
        <div class="w-50 container py-5">
            <p class="h3">Semakin mudah & aman berinvestasi dalam satu genggaman melalui aplikasi Ternak Connect </p>
            <p class="my-4">Daftarkan diri anda di aplikasi Ternak Connect sekarang juga dan rasakan kemudahannya!</p>
            <button class="w-100 rounded-pill button2"><a class="btn" href="{{ route('register') }}">Daftar Sekarang</a></button>
        </div>    
    </div>
    <div class="col color1 d-flex align-items-center">
        <img class="img-fluid img-thumbnail align-middle" src="{{ asset('./image/img1.jpg')}}" alt="isi foto">
=======
<div class="row py-5">
  <div class="col color1 py-5">
    <div class="w-50 container py-5">
      <p class="h3">Semakin mudah & aman berinvestasi dalam satu genggaman melalui aplikasi Ternak Connect </p>
      <p class="my-4">Daftarkan diri anda di aplikasi Ternak Connect sekarang juga dan rasakan kemudahannya!</p>
      <button class="w-100 rounded-pill button2"><a class="btn" href="{{ route('register') }}">Daftar
          Sekarang</a></button>
>>>>>>> 666b0fe7757e9e49d22a576cf24197af9adb2ff0
    </div>
  </div>
  <div class="col color1 d-flex align-items-center">
    <img class="img-fluid img-thumbnail align-middle" src="{{ asset('./image/img1.jpg')}}" alt="isi foto">
  </div>
</div>

<div class="container">
  <p class="h2 text-uppercase text-center">ada yang ingin ditanyakan?</p>
</div>
@endsection