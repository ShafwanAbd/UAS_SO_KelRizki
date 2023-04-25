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

  <div class="row pt-5">
    <h5>Peternakan yang bentar lagi sahamnya bisa kamu beli:</h5>
    <div class="col-md-4 pt-3 px-3">
      <div class="card rounded shadow">
        <div class="card-header pt-3 px-3 border-0">
          <h5>Singaparna Farm</h5><span class="badge bg-secondary">incoming</span>
        </div>
        <div class="card-body px-3">
          <small style="color:grey">0 / 10000 Lembar Terjual</small>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: 0%"></div>
          </div>
          <div class="pt-3">
            <small style="color:grey">Tasikmalaya</small>
            <p class="mb-0"><span style="color:blue">5%</span> Pembagian deviden perbulan </p>
            <p><span style="color:green">Rp. 100,000</span> Perlembar Saham </p>
          </div>
          <div class="row justify-content-between text-center">
            <div class="col-6">
              <span><small>Tanggal Buka</small></span>
              <p class="text-muted">10/04/2023</p>
            </div>
            <div class="col-6">
              <span><small>Tanggal Tutup</small></span>
              <p class="text-muted">24/04/2023</p>
            </div>
            <a href="" class="text-decoration-none">
              <p>Detail Peternakan ></p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection