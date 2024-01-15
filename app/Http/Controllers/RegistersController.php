<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegistersController extends Controller
{
    public function index()
    {
        return \view('login.register');
    }

    public function store(Request $request)
    {
        
        $register = $request->validate([
            'name'                  => 'required|max:255',
            'username'              => 'required|min:4|max:20|unique:users,username|alpha_dash',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|min:4|max:255|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        User::create($register);
        $request->session()->flash('success', 'Registration success. Please Login.');

        return Redirect('login');
    }
}
