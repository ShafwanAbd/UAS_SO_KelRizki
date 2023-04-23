@extends('layouts.sidebar')

@section('content') 
    <div class="container_profil">
        <div class="container_isi flex"> 
            <div class="container1">
                <h4>Profil</h4>
                <form method="POST" action="{{ url('/profil/update/'.Auth::user()->id) }}">
                @csrf
                <div class="container_form flex">
                    <div class="container_form_label">
                        <p>Nama Lengkap</p>
                        <p>Username</p>
                        <p>Nomor Telepon</p>
                        <p>Email</p>
                        <p>Alamat</p>
                    </div>
                    <div class="container_form_input">
                        <div class="flex">
                            <input class="form-control" name="firstName" placeholder="Nama Depan" type="text" value="{{ isset(Auth::user()->firstName) ? Auth::user()->firstName : '' }}">
                            <input class="form-control" name="lastName" placeholder="Nama Belakang" type="text" value="{{ isset(Auth::user()->lastName) ? Auth::user()->lastName : '' }}">
                        </div>
                        <input class="form-control" name="username" placeholder="Username" type="text" value="{{ isset(Auth::user()->username) ? Auth::user()->username : '' }}"> 
                        <input class="form-control" name="noHP" placeholder="Nomor Telepon" type="text" value="{{ isset(Auth::user()->noHP) ? Auth::user()->noHP : '' }}"> 
                        <input class="form-control" name="email" placeholder="Email" type="text" value="{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}"> 
                        <input class="form-control" name="alamat" placeholder="Alamat" type="text" value="{{ isset(Auth::user()->alamat) ? Auth::user()->alamat : '' }}"> 
                    </div>  
                </div>
                <button class="btn btn-primary">
                    Update
                </button>
                </form>
                <div class="container_delete">
                    <h4>Hapus Akun</h4>
                    <p>!!! AKUN YANG SUDAH DIHAPUS TIDAK BISA DIKEMBALIKAN !!!</p>
                    <a href="{{ url('/profil/delete/'.Auth::user()->id) }}" class="btn btn-primary">Delete</a>
                </div>
            </div>
            <div class="container2"> 
                <div class="container3">
                    <p>2</p>    
                </div>
                <div class="container3">
                    <p>3</p>    
                </div>
            </div>
        </div> 
    </div>
@endsection