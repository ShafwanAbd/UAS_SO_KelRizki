<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <!-- JQuery -->
  <script src="{{ asset('js/jquery-3.6.4.min.js')}}"></script>

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
  <div class="row w100">
    <div class="sidebar col-2 color1 min-vh-100">
      <nav class="text-light sticky-top">
        <a class="title" href="{{ url('/') }}">
          <p class="mx-3 my-5 h5 fw-bold">ternakConnect</p>
        </a>
        <ul class="text-capitalize">
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/dashboardAdmin') }}">Ringkasan</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/penggunaAdmin') }}">Pengguna</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/broadcastEmailAdmin') }}">Broadcast Email</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/pesanAdmin') }}">Pesan</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/depositAdmin') }}">Deposit</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/penarikanAdmin') }}">Penarikan</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/investasiAdmin') }}">Investasi</a></li>
          <li class="my-4"><a class="text-light nav-link" href="{{ url('/blogAdmin') }}">Blog</a></li>
          <li class="my-4"><a class="text-light nav-link" href="">keluar</a></li>
        </ul>
      </nav>
    </div>
    <div class="col">
      @yield('content')
    </div>
  </div>
</body>

</html>