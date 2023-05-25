@extends('layouts.sidebarPeternak')

@section('content')

<div class="container py-5">
  <div class="d-flex flex-row ">
    <div class="d-flex flex-row ">
      <div class="profile-image">
        @if (isset(Auth::user()->poto_profil))
        <img class="rounded-circle m-2" src="{{asset('./image/poto_profil/'.Auth::user()->poto_profil)}}" alt="" height="60px" width="60px">
        @else
        <img class="rounded-circle m-2" src="{{asset('img/profile-icon.jpg')}}" alt="" height="60px" width="60px">
        @endif
      </div>
      <div class="profile-name pt-2 px-2">
        <h5>Peternak Handal</h5>
        <p>Halo Peternak Handal, Selamat Datang di Dashboard Kamu.</p>
      </div>
    </div>
    <div class="d-inline pt-2 ms-auto">
      <button class="btn btn-primary">Detail Bisnis Kamu</button> 
      @if (Auth::user()->jumlah_peternakan)
        @if (Auth::user()->jumlah_peternakan->count() > 0)
        <button class="btn btn-success">Upload Laporan Bulanan</button>
        @endif 
      @else
      <a href="{{ url('/pengajuan') }}" class="btn btn-primary">Ajukan Bisnis</a>
      @endif
    </div>
  </div>

  <div class="row pt-3">
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Saldo</h6>
        <p>{{ @money(Auth::user()->balance) }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Saldo yang Diinvestasikan</h6>
        <p>{{ @money(Auth::user()->balance_to_invest) }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Profit</h6>
        <p>{{ @money(Auth::user()->profit) }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Jumlah Peternakan</h6>
        <p>{{ $datas['jmlpeternakan'] }}</p>
      </div>
    </div>
  </div>
</div>
</div>


@endsection