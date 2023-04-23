<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <!-- Google Fonts (Poppins) -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <title>Penarikan</title>

  <style>
  body {
    font-family: 'Poppins';
  }
  </style>
</head>

<body>
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

  </div>


  <!-- JS Bootstrap -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

  <script>
  $(document).ready(function() {
    $('#riwayat-deposit').DataTable();
  });
  </script>
</body>

</html>