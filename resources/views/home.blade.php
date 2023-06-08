@extends('layouts.app')

@section('content')
<div class="container">

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
    </div>
  </div>

  <div class="my-5 text-center py-5">
    <div class="w-75 mx-auto my-5">
      <p class="h2 text-capitalize">Investasi Bisnis dengan Skema Gotong Royong</p>
      <p>Mulai dari Rp 1 juta, miliki bisnis Waralaba, Restoran, Jasa, Proyek dan banyak lainnya secara bersama-sama dan
        nikmati profit bisnis atau imbal hasil secara berkala.</p>
    </div>
    <div class="row mx-0">
      <div class="col-3">
        <img src="{{ asset('./img/1.jpg')}}" class="rounded img-fluid" alt="ini gambar" style="max-height: 300px;">
        <p class="mt-4">Waktu Pendanaan Tercepat</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./img/2.jpg')}}" class="rounded img-fluid" alt="ini gambar" style="max-height: 300px;">
        <p class="mt-4">Total Investasi</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./img/3.jpg')}}" class="rounded img-fluid" alt="ini gambar" style="max-height: 300px;">
        <p class="mt-4">Investor Terdaftar</p>
      </div>
      <div class="col-3">
        <img src="{{ asset('./img/4.jpg')}}" class="rounded img-fluid " alt="ini gambar" style="max-height: 300px;">
        <p class="mt-4">Total Jumlah Penerbit</p>
      </div>
    </div>
  </div>
</div>
<div class="row py-5 mx-0">
  <div class="col color1 py-5">
    <div class="w-50 container py-5">
      <p class="h3">Semakin mudah & aman berinvestasi dalam satu genggaman melalui aplikasi Ternak Connect </p>
      <p class="my-4">Daftarkan diri anda di aplikasi Ternak Connect sekarang juga dan rasakan kemudahannya!</p>
      <button class="w-100 rounded-pill button2"><a class="btn" href="{{ route('register') }}">Daftar
          Sekarang</a></button>
    </div>
  </div>
  <div class="col color1 d-flex align-items-center">
    <img class="img-fluid img-thumbnail rounded align-middle" src="{{ asset('./img/genggaman (2).jpg')}}" alt="isi foto">
  </div>
</div>

<div class="container mb-5">
  <p class="h2 text-uppercase text-center mt-3 mb-4">ada yang ingin ditanyakan?</p>
  <div class="accordion" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Apa yang dimaksud sistem investasi bisnis gotong royong (Securities Crowdfunding) di Ternak Connect ?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Bagaimana sistem pembagian keuntungan di Ternak Connect ?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Berapa minimal berinvestasi ?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Bagaimana cara menjadi investor ?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
  <p class="text-capitalize text-center my-4"><a class="btn" href="">Lihat FAQ Ternak Connect Lainnya</a></p>
</div>
</div>
@endsection