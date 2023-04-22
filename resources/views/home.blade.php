@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
 
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1>LANDING PAGE</h1>  
    </div>
</div>
@endsection
