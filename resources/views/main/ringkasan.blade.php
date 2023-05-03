@extends('layouts.sidebar')

@section('content')
<div class="container py-5">
  <div class="row d-inline-flex">
    <div class="card border-0">

      <div class="col-md-8">
        <div class="d-flex flex-row">
          <div class="profile-image">
            @if (isset(Auth::user()->poto_profil))
            <img class="rounded-circle m-2" src="{{asset('./image/poto_profil/'.Auth::user()->poto_profil)}}" alt="" height="60px" width="60px">
            @else            
            <img class="rounded-circle m-2" src="{{asset('img/profile-icon.jpg')}}" alt="" height="60px" width="60px">
            @endif
          </div>
          <div class="profile-name pt-2 px-2">
            <h5>{{ Auth::user()->username }}</h5>
            <p>Halo {{ Auth::user()->username }}, Selamat Datang di Dashboard Kamu.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ps-3 py-2">
        <a href="{{ asset('/deposit') }}" class="btn px-4 rounded-pill" style="background-color: #769FCD; color: white;"> <span>Isi
            Saldo
            +</span></a>
      </div>

    </div>

    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Saldo</h6>
        <p>{{ @money(isset(Auth::user()->balance) ? Auth::user()->balance : '0') }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Saldo yang Diinvestasikan</h6>
        <p>{{ @money(isset(Auth::user()->balance_to_invest) ? Auth::user()->balance_to_invest : '0') }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Profit</h6>
        <p>{{ @money(isset(Auth::user()->profit) ? Auth::user()->profit : '0') }}</p>
      </div>
    </div>
    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Jumlah Peternakan</h6>
        <p>{{ isset(Auth::user()->investing) ? Auth::user()->investing : '0' }}</p>
      </div>
    </div>
  </div>


  <!-- Alokasi Dana Investasi -->
  <div class="row pt-5">
    <h5><i class="bi bi-cash-stack"></i> Alokasi Dana Investasi Kamu:</h5>
    @foreach($datas1 as $key=>$val)
    <div class="col-md-4 pt-3 px-3">
      <div class="card border-0 rounded shadow">
        <div class="card-header pt-3 px-3 border-0">
          <h5>{{ $val->nama }}</h5><span style="color:green">(500 Lembar/5 Lot)</span>
        </div>
        <div class="card-body px-3">
          <small style="color:grey">{{ $val->lembar_terjual }} / {{ $val->lembar }} Lembar Terjual</small>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $val->lembar_terjual }}" aria-valuemin="0" aria-valuemax="{{ $val->lembar }}">
            @php 
              $persenanBar = $val->lembar_terjual / $val->lembar * 100;
            @endphp
            <div class="progress-bar" style="width: '{{ $persenanBar }}%'"></div>
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
            <a href="{{ url('/investasiDetail/'.$val->id) }}" class="text-decoration-none">
              <p>Detail Peternakan ></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    <!-- <div class="col-md-4 pt-3 px-3">
      <div class="card border-0 rounded shadow">
        <div class="card-header pt-3 px-3 border-0">
          <h5>Taman Farm</h5><span style="color:green">(500 Lembar/5 Lot)</span>
        </div>
        <div class="card-body px-3">
          <small style="color:grey">3000 / 10000 Lembar Terjual</small>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: 30%"></div>
          </div>
          <div class="pt-3">
            <small style="color:grey">Tasikmalaya</small>
            <p class="mb-0"><span style="color:blue">5%</span> Pembagian deviden perbulan </p>
            <p><span style="color:green">Rp. 80,000</span> Perlembar Saham </p>
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

    <div class="col-md-4 pt-3 px-3">
      <div class="card border-0 rounded shadow">
        <div class="card-header pt-3 px-3 border-0">
          <h5>Naratas Farm</h5><span style="color:green">(500 Lembar/5 Lot)</span>
        </div>
        <div class="card-body px-3">
          <small style="color:grey">4000 / 10000 Lembar Terjual</small>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: 40%"></div>
          </div>
          <div class="pt-3">
            <small style="color:grey">Ciamis</small>
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
    </div> -->

  </div>
</div>
</div>
</div>




<!-- JS Bootstrap -->
<!-- <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>  -->
@endsection