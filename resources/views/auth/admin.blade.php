@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-5 fw-bold">Akun Anda Tidak Mempunyai Role 'Admin'</div>

                <div class="card-body"> 

                    <p class="py-3">Silahkan hubungi Admin jika Anda adalah rekan kerja dalam Ternak Connect dalam waktu 2x24 jam kerja.</p>
                    <a href="https://wa.me/+621311073610" class="btn btn-primary float-end">Hubungi Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
