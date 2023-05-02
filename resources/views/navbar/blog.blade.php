@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-5 mb-2">
        <p class="fw-bolder h1 text-dark text-capitalize">info</p>
        <p class="">Pembaruan terbaru dan sumber daya pilihan</p>
    </div>
    <div class="row">
        <div class="col-12 my-5 text-center">
            <div class="card">
                <img src="" class="card-img-top" alt="isi fotonya">
                <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none fw-bold text-dark" href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('./img/profile-icon.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none fw-bold text-dark" href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('./img/profile-icon.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none fw-bold text-dark" href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('./img/profile-icon.jpg')}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none fw-bold text-dark" href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection