<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- JQuery -->
  <script src="{{ asset('js/jquery-3.6.4.min.js')}}"></script>

  <!-- icon -->
  <script src="https://unpkg.com/feather-icons"></script>
   
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Bootstrap External -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <!-- Private External -->
  <link rel="stylesheet" href="{{ asset('css/css.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cssShafwan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/zulfan.css') }}">
  <script src="{{ asset('js/js.js') }}"></script>


  <!-- animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- printThis() -->
  <script src="{{ asset('js/printThis.js') }}"></script>

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


  @yield('head')

  <title>Document</title>
</head>

<body>
  <div class="content">
    <div class="text-light sidebar">
      <div class="sidebar-menu pt-5">
        <div class=" text-end pe-3">
          <i data-feather="x" id="x"></i>
        </div>
        <a class="title" href="{{ url('/') }}">
          <p class="mx-3 mb-5 mt-3 h5 fw-bold">ternakConnect</p>
        </a>
        <ul class="text-capitalize"> 
          <li class="my-5"><a class="text-light nav-link" href="{{ url('/dashboard') }}"><i class="bi bi-file-earmark-spreadsheet pe-3"></i>ringkasan</a></li>
          <li class="my-5"><a class="text-light nav-link" href="{{ url('/penarikan') }}"><i class="bi bi-wallet2 pe-3"></i>penarikan</a></li>
          <li class="my-5">
            <div class="dropdown">
              <a class="dropdown-toggle text-light nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-buildings pe-3"></i>Investasi
              </a>

              <ul class="collapse color1" id="collapseExample">
                <li><a class="dropdown-item text-light my-4" href="{{ url('/semua_bisnis') }}">Semua Bisnis</a></li>
                <li><a class="dropdown-item text-light my-4" href="{{ url('/aktivitas') }}">Aktivitas</a></li>
              </ul>
            </div>
          </li>
          <li class="my-5"><a class="text-light nav-link" href="{{ url('/pertanyaan') }}"><i class="bi bi-question-circle pe-3"></i>Pertanyaan</a></li>
          <li class="my-5">
            <div class="dropdown">
              <a class="dropdown-toggle text-light nav-link" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
              <i class="bi bi-gear pe-3"></i>Pengaturan
              </a>

              <ul class="collapse color1" id="collapseExample2">
                <li><a class="dropdown-item text-light my-3" href="{{ url('/profil') }}">Profile</a></li>
                <li><a class="dropdown-item text-light my-3" href="{{ url('/log_audit') }}">Log Audit</a></li>
                <li><a class="dropdown-item text-light my-3" href="{{ url('/kata_sandi') }}">Kata Sandi</a></li>
                <li><a class="dropdown-item text-light my-3" href="{{ url('/verifikasi_identitas') }}">verifikasi identitas</a></li>
              </ul>
            </div>
          </li>
          <li class="my-5"><a class="text-light nav-link" href=""><i class="bi bi-box-arrow-in-right pe-3"></i>keluar</a></li>
        </ul>
      </div>
    </div>

    <div class="pt-3 container btn-menu ps-5 fw-bold" id="humberger">
      <i data-feather="menu" id="humberger"></i>
    </div>

      @yield('content')

  </div>

  <script>
      feather.replace()
  </script>

  <script>
    const burger = document.querySelector('#humberger');
    const x = document.querySelector('#x');
    const sidebar = document.querySelector('.sidebar');

    burger.onclick = ()=>{
      sidebar.classList.toggle('active')
      burger.style.display = 'none'
    }

    document.addEventListener('click', (e)=>{
      if(!sidebar.contains(e.target) && !burger.contains(e.target) || x.contains(e.target)) {
        sidebar.classList.remove('active')
        burger.style.display = 'block'
      }
    })
  </script>
</body>
</html>