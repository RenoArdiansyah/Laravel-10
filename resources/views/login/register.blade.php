@extends('layouts.main')

@section('title', 'Login')

@section('contain')
    <div class="row h-100 justify-content-center align-items-center my-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Register</h3
                    <form class="my-2">

                        <div class="form-group my-2">
                            <label for="username">User:</label>
                            <input type="text" class="form-control" id="user" placeholder="Enter your user" name="user">
                        </div>
                        <div class="form-group my-2">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="form-group my-2">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                        </div>
                        <div class="form-group my-2">
                            <label for="Fpassword">confirm Password:</label>
                            <input type="Fpassword" class="form-control" id="Fpassword" placeholder="Enter your password" name="Fpassword">
                        </div>
                        <small class="d-block my-2 mx-3">sudah punya akun? <a href="/login">Login now!</a></small>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection