@extends('layouts.main')

@section('title', 'Login')

@section('contain')
<div class="container mt-n3">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4" style="overflow: hidden;">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Registerd</h3>
                    {{-- <form class="my-2" action="{{ route('registerd.store') }}" method="POST"> --}}
                        @if(session()->has('loginErr'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="my-2" action="" method="POST">
                        @csrf
                        <div class="form-group my-2">
                            <label for="name">Name:</label>
                            <input required type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="username">Username:</label>
                            <input required type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username" name="username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email:</label>
                            <input required type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="password">Password:</label>
                            <input required type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password" value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input required type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm your password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <small class="d-block my-2 mx-3">Already have an account? <a href="/login" class="text-decoration-none">Login</a></small>
                        <div class="text-center pt-2">
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection