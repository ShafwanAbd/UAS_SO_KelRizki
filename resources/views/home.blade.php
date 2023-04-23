@extends('layouts.layout')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
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
                <button type="button" class="btn btn-success w-100 rounded-pill ">Mulai Investasi</button>
            </div>
        </div>
        <div class="col-4">
        <img src=".." alt="isi foto">
        </div>
    </div>

    <div class="my-5 text-center py-5">
        <div class="w-75 mx-auto my-5">
            <p class="h2 text-capitalize">Investasi Bisnis dengan Skema Gotong Royong</p>
            <p>Mulai dari Rp 1 juta, miliki bisnis Waralaba, Restoran, Jasa, Proyek dan banyak lainnya secara bersama-sama dan nikmati profit bisnis atau imbal hasil secara berkala.</p>
        </div>
        <div class="row">
            <div class="col-3">
            <img src="" class="rounded-circle" alt="ini gambar">
            <p class="mt-4">Waktu Pendanaan Tercepat</p>
            </div>
            <div class="col-3">
            <img src="" class="rounded-circle" alt="ini gambar">
            <p class="mt-4">Total Investasi</p>
            </div>
            <div class="col-3">
            <img src="" class="rounded-circle" alt="ini gambar">
            <p class="mt-4">Investor Terdaftar</p>
            </div>
            <div class="col-3">
            <img src="" class="rounded-circle" alt="ini gambar">
            <p class="mt-4">Total Jumlah Penerbit</p>
            </div>
        </div>
    </div>
</div>
<div class="row py-5">
    <div class="col bg-success rounded-top py-5">
        <div class="w-50 container py-5">
            <p class="h3">Semakin mudah & aman berinvestasi dalam satu genggaman melalui aplikasi Ternak Connect </p>
            <p class="my-4">Daftarkan diri anda di aplikasi Ternak Connect sekarang juga dan rasakan kemudahannya!</p>
            <button type="button" class="btn btn-dark w-100 rounded-pill ">Daftar Sekarang</button>
        </div>    
    </div>
    <div class="col bg-danger rounded-top">
        <img src="..." alt="ini foto">
>>>>>>> 56a0895258505f6dc0f92320925b71fd64604b35
    </div>
</div>
@endsection
