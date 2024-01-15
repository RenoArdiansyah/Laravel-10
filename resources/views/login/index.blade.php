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
                    <form class="my-2" action="/registerd" method="POST"> <!-- Tambahkan class text-center di sini -->
                        <div class="form-group my-2">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="login-username">
                        </div>
                        <div class="form-group my-2">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="login-pass">
                        </div>
                        
                        <small class="d-block my-2 mx-3">not register <a href="/registerd" class="text-decoration-none">Register now!</a></small>
                        <div class="text-center pt-2">
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">Login</button> <!-- Menggunakan kelas w-75 untuk lebar 75% -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
