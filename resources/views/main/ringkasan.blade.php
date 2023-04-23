<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <!-- Google Fonts (Poppins) -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <title>Dashboard</title>
</head>

<style>
  body {
    font-family: 'Poppins';
  }
</style>

<body>
  <div class="container py-5">
    <div class="row d-inline-flex">
      <div class="card border-0">

        <div class="col-md-8">
          <div class="d-flex flex-row">
            <div class="profile-image">
              <img class="rounded-circle m-2" src="{{asset('img/profile-icon.jpg')}}" alt="" height="60px" width="60px">
            </div>
            <div class="profile-name pt-2 px-2">
              <h5>Rizki Pratama</h5>
              <p>Halo Rizki Pratama, Selamat Datang di Dashboard Kamu.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ps-3 py-2">
          <a href="/deposit" class="btn px-4 rounded-pill" style="background-color: #769FCD; color: white;"> <span>Isi
              Saldo
              +</span></a>
        </div>

      </div>

      <div class="col-md-3 pt-3">
        <div class="card pt-3 px-3 border-0 bg-white shadow">
          <h6 class="bold">Saldo</h6>
          <p>Rp. 12,000,000</p>
        </div>
      </div>
      <div class="col-md-3 pt-3">
        <div class="card pt-3 px-3 border-0 bg-white shadow">
          <h6 class="bold">Saldo yang Diinvestasikan</h6>
          <p>Rp. 12,000,000</p>
        </div>
      </div>
      <div class="col-md-3 pt-3">
        <div class="card pt-3 px-3 border-0 bg-white shadow">
          <h6 class="bold">Profit</h6>
          <p>Rp. 12,000,000</p>
        </div>
      </div>
      <div class="col-md-3 pt-3">
        <div class="card pt-3 px-3 border-0 bg-white shadow">
          <h6 class="bold">Jumlah Peternakan</h6>
          <p>3</p>
        </div>
      </div>
    </div>


    <!-- Alokasi Dana Investasi -->
    <div class="row pt-5">
      <h5><i class="bi bi-cash-stack"></i> Alokasi Dana Investasi Kamu:</h5>
      <div class="col-md-4 pt-3 px-3">
        <div class="card border-0 rounded shadow">
          <div class="card-header pt-3 px-3 border-0">
            <h5>State Farm Tasikmalaya</h5><span style="color:green">(500 Lembar/5 Lot)</span>
          </div>
          <div class="card-body px-3">
            <small style="color:grey">5000 / 10000 Lembar Terjual</small>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 50%"></div>
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
      <div class="col-md-4 pt-3 px-3">
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
      </div>
    </div>
  </div>
  </div>
  </div>




  <!-- JS Bootstrap -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

</body>

</html>