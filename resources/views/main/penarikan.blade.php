@extends('layouts.sidebar')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="d-flex flex-row">
      <h5>Penarikan</h5>
      <button class="btn rounded-pill ms-auto" style="background-color: #B9D7EA; color:white;">Buat Penarikan
        +</button>
    </div>

    <div class="col-md-8">
      <div class="card border-0 rounded shadow pt-5 pb-3">
        <div class="row pt-2">
          <div class="d-flex flex-row">
            <div class="jenis-transaksi px-3">
              <p class="fw-bold mb-0">Withdrawal</p>
              <p>26/03/2023 | 15:22</p>
            </div>
            <div class="tanggal-penarikan ms-auto px-3">
              <p class="ms-auto">Rp. 4,000,000</p>
            </div>
          </div>
        </div>
        <div class="row pt-2">
          <div class="d-flex flex-row">
            <div class="jenis-transaksi px-3">
              <p class="fw-bold mb-0">Withdrawal</p>
              <p>26/03/2023 | 15:22</p>
            </div>
            <div class="tanggal-penarikan ms-auto px-3">
              <p class="ms-auto">Rp. 4,000,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row pt-4">
        <div class="card border-0 shadow pt-3 pb-2 px-3">
          <h6>Dividen - Rp. 0</h6>
        </div>
      </div>
      <div class="row pt-4">
        <div class="card border-0 shadow pt-3 pb-2 px-3">
          <h6>Saldo - Rp. 12,000,000</h6>
        </div>
      </div>
      <div class="row pt-4">
        <div class="card border-0 shadow pt-3 pb-2 px-3">
          <h6 class="fw-bold">Payout Method</h6>
          <div class="transfer-method pt-2">
            <h6>Transfer</h6>
            <div class="d-flex flex-row">
              <div class="limit px-3">
                <p class="fw-bold mb-0">Limit</p>
                <p>1 - 1,000,000,000 IDR</p>
              </div>
              <div class="tanggal-penarikan ms-auto px-3">
                <p class="fw-bold mb-0">Duration</p>
                <p>1 Day (s)</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="limit px-3">
                <p class="fw-bold mb-0">Charge</p>
                <p>0.25%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      $('#riwayat-deposit').DataTable();
    });
  </script>
</div>
@endsection