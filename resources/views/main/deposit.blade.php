@extends('layouts.sidebar')
@section('content') 
<div class="container py-5">
    <div class="row">
      <h5>Transfer Bank</h5>
      <div class="col-md-8">
        <div class="card border-0 rounded shadow">
          <form action="" method="post">
            <div class="form-group row pt-4 pb-2 px-3">
              <label class="col-form-label col-lg-3">Jumlah Transfer</label>
              <div class="col-lg-9">
                <div class="input-group">
                  <span class="input-group-prepend ">
                    <span class="input-group-text rounded-0">Rp</span>
                  </span>
                  <input type="number" step="any" name="total-deposit" maxlength="10" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row pb-2 px-3">
              <label class="col-form-label col-lg-3">Detail Transfer</label>
              <div class="col-lg-9">
                <textarea class="form-control" name="detil-transaksi" id="detil-transaksi" rows="5" placeholder="Detil Transaksi" required style="height: 137px"></textarea>
              </div>
            </div>
            <div class="form-group row pb-2 px-3">
              <label class="col-form-label col-lg-3">Bukti Pembayaran</label>
              <div class="col-lg-9">
                <input type="file" class="custom-file-input" id="customFileLang" name="bukti-deposit">
                <label class="custom-file-label" for="customFileLang">Pilih Tangkapan Layar</label>
              </div>
            </div>
            <div class="row text-center pt-3 pb-4">
              <div class="col-md-12">
                <div class="form-group">
                  <button class="btn px-5 rounded-pill" style="background-color: #769FCD; color: white;">Lanjutkan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow">
          <div class="card-header border-0">
            <h5>Rincian Bank</h5>
          </div>
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="bank-logo m-2">
                <img class="rounded-circle" src="{{asset('img/permata.png')}}" alt="" height="60px" width="60px">
              </div>
              <div class="bank-name pt-4 px-2">
                <p>Bank Permata</p>
              </div>
            </div>
            <div class="row px-2 pt-2">
              <div class="d-flex flex-row">
                <p class="fw-bold">99857402193</p>
                <p class="ms-auto">Salin</p>
              </div>
              <small>Rizki Pratama</small>
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="row pt-5">
      <div class="col-md-12">
        <h5>Riwayat Deposit</h5>
        <div class="card border-0 shadow py-3">
          <table id="riwayat-deposit" class="table table-responsive py-4 text-center">
            <thead>
              <tr>
                <th>ID Referensi</th>
                <th>Jumlah</th>
                <th>Biaya Transfer</th>
                <th>Status</th>
                <th>Dibuat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>9988753</th>
                <th>Rp. 1,000,000</th>
                <th>Rp. 1,250</th>
                <th>Pending</th>
                <th>12/04/2023</th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- JS Bootstrap -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

  <script>
    $(document).ready(function() {
      $('#riwayat-deposit').DataTable();
    });
  </script>
@endsection

