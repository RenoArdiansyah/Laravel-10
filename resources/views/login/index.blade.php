@extends('layouts.main')

@section('title', 'Login')

@section('contain')
<div class="container mt-n3">
  <div class="row vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4" style="overflow: hidden;">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center">Login</h3>
          @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          @if(session()->has('loginErr'))
            <div class="alert alert-danger" role="alert">
              {{ session('loginErr') }}
            </div>
          @endif
          <form class="my-2" action="/login" method="POST">
            @csrf
            <div class="form-group my-2">
              <label for="email">Email:</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="Enter your email" name="email" autofocus required value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group my-2">
              <label for="password">Password:</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                placeholder="Enter your password" name="password" required value="{{ old('password') }}">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <small class="d-block my-2 mx-3">Not registered? <a href="/registerd" class="text-decoration-none">Register
                now!</a></small>
            <div class="text-center pt-2">
              <hr>
              <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
