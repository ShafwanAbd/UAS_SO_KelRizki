@extends('layouts.layout')

@section('content')
<div class="container vh-100 d-flex">
    <div class="justify-content-center w-50 m-auto align-items-center shadow rounded px-5 py-4">
        <a href="{{ url('/') }}" class="h2 text-decoration-none"><span>&#60;</span></a>
        <p class="text-center text-uppercase h2 fw-bold">register</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-2">
                        <label for="firstName" class="col-form-label text-md-end">First Name</label>
                        
                            <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                            @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label for="lastName" class="col-form-label text-md-end">Last Name</label>
                        <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName">
                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label for="username" class="col-form-label text-md-end">Username</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class=" mb-2">
                        <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="mb-2">
                        <label for="radio" class="col-form-label text-md-end">Role</label>
                        <div class="form-check">
                            <input value="peternak" class="form-check-input" type="radio" name="role" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Peternak
                            </label>
                        </div>
                        <div class="form-check">
                            <input value="investor" class="form-check-input" type="radio" name="role" id="flexRadioDefault2" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Investor
                            </label>
                        </div>
                    </div>
                    <div class="my-3">
                            <button type="submit" class="py-2 button1 w-100 rounded-pill">
                                {{ __('Register') }}
                            </button>
                    </div>
                </form>
                </div>
    </div>
</div>
@endsection
