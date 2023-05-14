@extends('layouts.sidebar')

@section('content') 
<div class="container_content container">
    <div class="container_profil">
        <div class="container_isi flex"> 
            <div class="container1">
                <h4>Profil</h4>
                <form method="POST" action="{{ url('/profil/update/'.Auth::user()->id) }}">
                @csrf
                <div class="container_form flex">
                    <div class="container_form_label">
                        <div class="item flex">
                            <p>Nama Lengkap</p>
                            <div class="input-group">
                                <div class="container_name flex">
                                    <input class="form-control firstname" name="firstName" placeholder="Nama Depan" type="text" value="{{ isset(Auth::user()->firstName) ? Auth::user()->firstName : '' }}">
                                    <input class="form-control lastname" name="lastName" placeholder="Nama Belakang" type="text" value="{{ isset(Auth::user()->lastName) ? Auth::user()->lastName : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="item flex">
                            <p>Username</p>
                            <div class="input-group">
                                <input class="form-control" name="username" placeholder="Username" type="text" value="{{ isset(Auth::user()->username) ? Auth::user()->username : '' }}"> 
                            </div>
                        </div>
                        <div class="item flex">
                            <p>Nomor Telepon</p>
                            <div class="input-group">
                                <input class="form-control" name="noHP" placeholder="Nomor Telepon" type="text" value="{{ isset(Auth::user()->noHP) ? Auth::user()->noHP : '' }}"> 
                            </div>
                        </div>  
                        <div class="item flex">
                            <p>Email</p>
                            <div class="input-group">
                                <input class="form-control" name="email" placeholder="Email" type="text" value="{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}"> 
                            </div>
                        </div>  
                        <div class="item flex">
                            <p>Alamat</p>
                            <div class="input-group">
                                <input class="form-control" name="alamat" placeholder="Alamat" type="text" value="{{ isset(Auth::user()->alamat) ? Auth::user()->alamat : '' }}"> 
                            </div>
                        </div>   
                    </div> 
                </div>
                <button class="btn btn-primary">
                    Update
                </button>
                </form>
                <div class="container_delete">
                    <h4>Hapus Akun</h4>
                    <p>!!! AKUN YANG SUDAH DIHAPUS TIDAK BISA DIKEMBALIKAN !!!</p>
                    <button type="button" class="btn btn-primary w100 bg-red" data-bs-toggle="modal" data-bs-target="#modalDelete1">Delete</button>
                </div>

                <div class="modal fade" id="modalDelete1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">WARNING !!!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus profile? Profil yang sudah dihapus tidak bisa dikembalikan lagi loh ...</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="{{ url('/profil/delete/'.Auth::user()->id) }}" class="btn btn-primary bg-red">Hapus</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container2"> 
                <div class="container3">
                    <form method="post" action="{{ url('/profil/update/photo/'.Auth::user()->id) }}" enctype="multipart/form-data"> 
                    @csrf
                    <div class="container_isi_inner">
                        <input id="inputFiles1" name="poto_profil" type="file" class="hidden">
                        <div class="container_img">
                            <label for="inputFiles1">
                                @if (isset(Auth::user()->poto_profil))
                                    <img src="{{ asset('./image/poto_profil/'.Auth::user()->poto_profil) }}">
                                @else
                                    <img src="{{ asset('/img/profile-icon.jpg') }}">
                                @endif
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w100">Ubah Poto</button>
                    </div>   
                    </form>
                </div> 
            </div>
        </div> 
    </div>
</div>
    
@endsection