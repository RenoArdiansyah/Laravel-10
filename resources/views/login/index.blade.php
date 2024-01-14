@extends('layouts.main')

@section('title', 'Login')

@section('contain')
    <div class="row h-100 justify-content-center align-items-center my-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Login</h3
                    <form class="my-2">
                        <div class="form-group my-2">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group my-2">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <small class="d-block my-2 mx-3">not register <a href="/registerd">Register now!</a></small>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
