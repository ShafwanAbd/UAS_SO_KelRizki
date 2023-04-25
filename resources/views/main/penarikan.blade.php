@extends('layouts.sidebar')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="d-flex flex-row">
      <h5>Penarikan</h5>
      <button class="btn rounded-pill ms-auto" data-bs-toggle="modal" data-bs-target="#buatPenarikanModal1" style="background-color: #769FCD; color:white;">Buat Penarikan +</button>
    </div>

    <div class="modal fade" id="buatPenarikanModal1" tabindex="-1" aria-labelledby="buatPenarikanModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form method="POST" action="{{ url('/penarikan/create') }}">
              @csrf
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Membuat Tiket Penarikan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="form-floating mb-3">
                      <select id="floatingInput" name="metode_penarikan" class="form-control" required>
                          <option disabled selected>-- Select --</option>
                          <option value="transfer">Transfer</option>
                      </select>
                      <label for="floatingInput">Metode Penarikan</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" name="amount" class="form-control" id="floatingInput" step="10000" placeholder="Subjek" required>
                    <label for="floatingInput">Amount</label>
                  </div>

                  <script>
                  $(document).ready(function() {
                    $('input[name="amount"]').on('input', function() {
                      // Get the value of the input field
                      var inputVal = $(this).val();

                      console.log(inputVal);

                      // Remove non-numeric characters 

                      // Format the value as Indonesian Rupiah
                      var formattedVal = 'Rp ' + new Intl.NumberFormat('id-ID').format(inputVal);
                      console.log(formattedVal);

                      // Set the formatted value back to the input field
                      $(this).val(formattedVal);
                    });
                  });
                  </script>
                  
                  <div class="form-floating mb-3">
                      <select id="floatingInput" name="debit_from" class="form-control" required>
                          <option disabled selected>-- Select --</option>
                          <option value="dividen">Dividen - {{ @money(Auth::user()->dividen) }}</option>
                          <option value="balance">Saldo Rekening - {{ @money(Auth::user()->balance) }}</option>
                          <option value="bonus_afiliasi">Bonus Afiliasi - {{ @money(Auth::user()->dividen) }}</option>
                      </select>
                      <label for="floatingInput">Debit Dari</label>
                  </div>
                  <div class="form-floating mb-3">
                      <textarea type="text" name="deskripsi" class="form-control" id="floatingInput" placeholder="Tulis Deskripsi Disini ..." required></textarea>
                      <label for="floatingInput">Deskripsi</label>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary w100">KIRIM</button>
              </div>
          </form>
        </div>
      </div>
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
          <h6>Dividen - {{ @money(Auth::user()->dividen) }}</h6>
        </div>
      </div>
      <div class="row pt-4">
        <div class="card border-0 shadow pt-3 pb-2 px-3">
          <h6>Saldo - {{ @money(Auth::user()->balance) }}</h6>
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
                <p>{{ @money($setting->limit_first) }} - {{ @money($setting->limit_last) }}</p>
              </div>
              <div class="tanggal-penarikan ms-auto px-3">
                <p class="fw-bold mb-0">Duration</p>
                <p>{{ $setting->day_estimation }} Day (s)</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="limit px-3">
                <p class="fw-bold mb-0">Charge</p>
                <p>{{ $setting->charge }}%</p>
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