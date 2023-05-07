@extends('layouts.sidebar')

@section('content')

<div class="container py-5">
  <div class="row">
    <div class="page-header">
      <h5 class="fw-bold">Investasi Segera</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-5 border-0 shadow">
        <div class="d-flex flex-row text-center align-items-center mt-2">
          <div class="Aktif ms-5">
            <a href="{{ url('/semua_bisnis') }}" style="color:black" class="text-decoration-none">
              <h6><i class="bi bi-building-check"></i> Aktif</h6>
            </a>
          </div>
          <div class="Segera ms-auto p-3">
            <a href="{{ url('/investasi-segera') }}" style="color:#5e72e4" class="text-decoration-none">
              <h6><i class="bi bi-hourglass-split"></i> Segera</h6>
            </a>
          </div>
          <div class="Selesai ms-auto p-3">
            <a href="{{ url('/investasi-selesai') }}" style="color:black" class="text-decoration-none">
              <h6><i class="bi bi-calendar2-check"></i> Selesai</h6>
            </a>
          </div>
          <div class="Diikuti ms-auto p-3 me-5">
            <a href="{{ url('/investasi-diikuti') }}" style="color:black" class="text-decoration-none">
              <h6><i class="bi bi-bookmark-check"></i> Diikuti</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="row text-center justify-content-center align-items-center pt-4" style="height: 300px;">
    <div class="col-12">
      <i class="bi bi-building-dash" style="font-size: 70px;"></i>
      <h6 class="pt-2">yah, belum ada peternak yang
        mau ngajuin dana lagi
        nih, ditunggu yaa!</h6>
    </div>
  </div> -->

  @if ($datas1->count() > 0)
  <div class="row pt-5">
    <h5>Peternakan yang bentar lagi sahamnya bisa kamu beli:</h5> 
    @foreach($datas1 as $key=>$val)
    <div class="col-md-4 pt-3 px-3">
      <div class="card border-0 rounded shadow">
        <div class="card-header pt-3 px-3 border-0">
          <h5>{{ $val->nama }}</h5><span style="color:green"></span>
        </div>
        <div class="card-body px-3">
          <small style="color:grey">{{ $val->lembar_terjual }} / {{ $val->lembar }} Lembar Terjual</small>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $val->lembar_terjual }}" aria-valuemin="0" aria-valuemax="{{ $val->lembar }}">
            @php 
              $persenanBar = $val->lembar_terjual / $val->lembar * 100; 
            @endphp
            <div id="progress{{ $val->id }}" class="progress-bar" width="{{ $persenanBar }}%"></div>

            <script>
              $(document).ready(function() {
                $('#progress{{ $val->id }}').css('width', '{{ $persenanBar }}%');
              });
            </script>
          </div>
          <div class="pt-3">
            <small style="color:grey">{{ $val->location }}</small>
            <p class="mb-0"><span style="color:blue">{{ $val->interest }}%</span> Pembagian deviden perbulan </p>
            <p><span style="color:green">{{ @money($val->harga) }}</span> Perlembar Saham </p>
          </div>
          <div class="row justify-content-between text-center">
            <div class="col-6">
              <span><small>Tanggal Buka</small></span>
              <p class="text-muted">{{ $val->start_date }}</p>
            </div>
            <div class="col-6">
              <span><small>Tanggal Tutup</small></span>
              <p class="text-muted">{{ $val->expiring_date }}</p>
            </div>
            <a href="{{ url('/detail-peternakan/'.$val->id) }}" class="text-decoration-none">
              <p>Detail Peternakan ></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  @else
  <h1>WADUH KOSONG 😅</h1>
  @endif

@endsection