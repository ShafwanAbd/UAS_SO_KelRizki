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

  <title>Deposit</title>

  <style>
  body {
    font-family: 'Poppins';
  }
  </style>
</head>

<body>
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
                <textarea class="form-control" name="detil-transaksi" id="detil-transaksi" rows="5"
                  placeholder="Detil Transaksi" required style="height: 137px"></textarea>
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
                  <button class="btn btn-primary px-5">Lanjutkan</button>
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
                <img sclass="rounded-circle" src="{{asset('img/permata.png')}}" alt="" height="60px" width="60px">
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
  </div>


  <!-- JS Bootstrap -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>