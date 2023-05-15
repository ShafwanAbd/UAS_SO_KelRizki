@extends('layouts.sidebar')
@section('content')
<div class="container py-5">
  <div class="row">
    <div class="page-header">
      <h5 class="fw-bold">Aktifitas Transaksi</h5>
    </div>
  </div>
  <div class="row align-items-center justify-content-center">
    @foreach($datas1 as $key=>$val)
    <div class="col-md-11 my-2">
      <div class="card border-0 rounded shadow pt-4 pb-3">
        <div class="row pt-2">
          <div class="d-flex flex-row">
            <div class="jenis-transaksi px-3">

              <p class="fw-bold mb-0">Order - Buy 
                  <!-- NO NEED STATUS --> 
                <!-- @if(isset($val->status) ? ($val->status == 1 ? : '') : '')
                <span class="badge bg-success">Success</span>
                @else
                <span class="badge bg-warning">Pending</span>
                @endif -->
              </p>
              <!-- rapetin (udah) -->
              <p class="lh-base">{{ $val->lembar }} Lot<br> {{ App\Models\Investasi::where('id', $val->id_investasi)->value('nama') }}</p>
            </div>
            <div class="tanggal-penarikan ms-auto px-3">
              <!-- mentokin kanan (udah) -->
              <p class="ms-auto text-end">{{ @money($val->amount) }}</p>
              <p class="ms-auto">{{ $val->created_at }}</p>
            </div>

            <!-- <div class="jenis-transaksi px-3">

              <p class="fw-bold mb-0">Order - Sell <span class="badge bg-success">Success</span></p>
             
              <p class="lh-base">1 Lot <br> Naratas Farm</p>
            </div>
            <div class="tanggal-penarikan ms-auto px-3">
              
              <p class="ms-auto text-end">Rp. 1,000,000</p>
              <p class="ms-auto">2023-04-25 15:45:10</p>
            </div> --> 
          </div>
        </div>

        <!-- <div class="row pt-2">
          <div class="d-flex flex-row">
            <div class="jenis-transaksi px-3">
              <p class="fw-bold mb-0">Riwayat Transaksi Masih Kosong Nih...</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection