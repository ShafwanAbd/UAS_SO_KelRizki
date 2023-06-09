<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

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
  <!-- <div class="row mx-0">
    <div class=" col-2 color1 min-vh-100 ">
      <nav class="text-light sticky-top">
        <a class="title" href="{{ url('/') }}">
          <p class="mx-3 my-5 h5 fw-bold">ternakConnect</p>
        </a>
        <ul class="text-capitalize">
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/dashboardAdmin') }}">Ringkasan</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/penggunaAdmin') }}">Pengguna</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/broadcastEmailAdmin') }}">Broadcast Email</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/pesanAdmin') }}">Pesan</a></li>
          <li><a class="my-4 text-light nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Deposit</a></li>
          <div class="collapse" id="collapseExample"> 
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/depositTransaksiAdmin') }}">Transaksi</a></li>
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/depositPengaturanAdmin') }}">Pengaturan</a></li>
          </div> 
          <li><a class="my-4 text-light nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">Penarikan</a></li>
          <div class="collapse" id="collapseExample2"> 
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/penarikanTransaksiAdmin') }}">Transaksi</a></li>
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/penarikanPengaturanAdmin') }}">Pengaturan</a></li>
          </div> 
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/listBisnisAdmin') }}">List Bisnis</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/blogAdmin') }}">Blog</a></li>
          <li class="my-4"><a class="text-light nav-link" href="">keluar</a></li>
        </ul>
      </nav>
    </div>
    <div class="col">
      @yield('content')
    </div>
  </div> -->

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
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/dashboardAdmin') }}"><i class="bi bi-file-earmark-spreadsheet pe-3"></i>Ringkasan</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/penggunaAdmin') }}"><i class="bi bi-person-lines-fill pe-3"></i>Pengguna</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/broadcastEmailAdmin') }}"><i class="bi bi-broadcast pe-3"></i>Broadcast Email</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/pesanAdmin') }}"><i class="bi bi-chat-text-fill pe-3"></i>Pesan</a></li>
          <li><a class="my-4 text-light nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-cash-stack pe-3"></i>Deposit</a></li>
          <div class="collapse" id="collapseExample"> 
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/depositTransaksiAdmin') }}">Transaksi</a></li>
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/depositPengaturanAdmin') }}">Pengaturan</a></li>
          </div> 
          <li><a class="my-4 text-light nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-wallet2 pe-3"></i>Penarikan</a></li>
          <div class="collapse" id="collapseExample2"> 
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/penarikanTransaksiAdmin') }}">Transaksi</a></li>
            <li class="my-4"><a class="text-light nav-link mx-3" href="{{ url('/penarikanPengaturanAdmin') }}">Pengaturan</a></li>
          </div> 
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/listBisnisAdmin') }}"><i class="bi bi-tropical-storm pe-3"></i>List Bisnis</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/blogAdmin') }}"><i class="bi bi-postcard-fill pe-3"></i>Blog</a></li> 
          <li class="my-5"><a class="text-light nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-right pe-3"></i> keluar</a></li>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
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