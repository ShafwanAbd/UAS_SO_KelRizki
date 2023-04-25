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

    @yield('head')

    <title>Document</title>
</head>

<body>
    <div class="row mx-0">
        <div class="sidebar col-2 color1 min-vh-100">
            <nav class="text-light sticky-top">
                <a href="{{ url('/') }}">
                    <p class="mx-3 my-5 h5 fw-bold">ternakConnect</p>
                </a>
                <ul class="text-capitalize">
                    <li class="my-5"><a class="text-light nav-link" href="{{ url('/dashboard') }}">ringkasan</a></li>
                    <li class="my-5"><a class="text-light nav-link" href="{{ url('/penarikan') }}">penarikan</a></li>
                    <li class="my-5">
                        <div class="accordion" id="accordionExample1">
                            <a class="dropdown-toggle text-light nav-link" href="{{ url('/investasi') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Investasi
                            </a>

                            <ul id="collapseOne" class="accordion-collapse collapse show color1" data-bs-parent="#accordionExample1">
                                <li><a class="dropdown-item text-light my-4" href="{{ url('/semua_bisnis') }}">Semua Bisnis</a></li>
                                <li><a class="dropdown-item text-light my-4" href="{{ url('/aktivitas') }}">Aktivitas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="my-5"><a class="text-light nav-link" href="{{ url('/pertanyaan') }}">Pertanyaan</a></li>
                    <li class="my-5">
                        <div class="accordion" id="accordionExample2">
                            <a class="text-light nav-link dropdown-toggle" href="{{ url('/investasi') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pengaturan
                            </a>

                            <ul id="collapseTwo" class="accordion-collapse collapse show color1" data-bs-parent="#accordionExample2">
                                <li><a class="dropdown-item text-light my-4 " href="{{ url('/profil') }}">Profile</a></li>
                                <li><a class="dropdown-item text-light my-4 " href="{{ url('/log_audit') }}">Log Audit</a></li>
                                <li><a class="dropdown-item text-light my-4 " href="{{ url('/kata_sandi') }}">Kata Sandi</a></li>
                                <li><a class="dropdown-item text-light my-4 " href="{{ url('/verifikasi_identitas') }}">verifikasi identitas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="my-5"><a class="text-light nav-link" href="">keluar</a></li>
                </ul>
            </nav>
        </div>
        <div class="col">
            @yield('content')
        </div>
    </div>
</body>

</html>