@extends('layouts.sidebarPeternak')

@section('content')

<div class="container py-5">
  
  @if(Session::has('success'))
      <p class="alert alert-success fixed-top w-75 mx-auto my-5 text-center" id="sixSeconds">{{ Session::get('success') }}</p>
  @elseif(Session::has('failed'))
      <p class="alert alert-warning fixed-top w-75 mx-auto my-5 text-center" id="sixSeconds">{{ Session::get('failed') }}</p>
  @endif 

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

      @if ($datas['jmlpeternakan'] > 0) 
      
      <a href="{{ url('/detailBisnis') }}" class="btn btn-primary">Detail Bisnis Kamu</a>

      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#laporanBulananModal">
        Upload Laporan Bulanan
      </button>

      <!-- Modal -->
      <div class="modal fade" id="laporanBulananModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form method="POST" action="{{ url('upload_laporan_bulanan') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Laporan Bulanan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <input name="laporan" type="file">
              <p class="mt-3 form-text">Silahkan untuk mengirim laporan bulanan terhadap perkembangan bisnis peternakan Anda.</p>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      @elseif ($datas['jmlpeternakan'] < 1)
      <a href="{{ url('/pengajuan') }}" class="btn btn-primary">Ajukan Bisnis</a> 
      @endif
    </div>
  </div>

  <div class="d-flex justify-content-between pt-3"> 

    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Jumlah Dana Terkumpul</h6>
        <p>{{ @money(Auth::user()->profit) }}</p>
      </div>
    </div>

    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Jumlah Investor</h6>
        <p>{{ $datas['jmlhInvestasi'] }}</p>
      </div>
    </div>

    <div class="col-md-3 pt-3">
      <div class="card pt-3 px-3 border-0 bg-white shadow">
        <h6 class="bold">Jumlah Peternakan</h6>
        <p>{{ $datas['jmlpeternakan'] }}</p>
      </div>
    </div>

  </div>
  <!-- Alokasi Dana Investasi -->
  <div class="row pt-5">
    <h5><i class="bi bi-cash-stack"></i> Peternakan Kamu:</h5>
    @if ($datas1->count() > 0)
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
    @else
    <div class="card shadow border-0">
        <div class="d-flex justify-content flex-column"> 
            <img class="mx-auto w-25 mt-5 mb-2" src="{{ url('./image/helper/image1.png') }}">
            <h4 class="text-center mb-4 pb-3">Alokasi Dana Investasi Kamu Masih Kosong Nih...</h4>
        </div>
    </div>
    @endif

      </div>
    </div>
  </div>
</div> 
</div>


@endsection