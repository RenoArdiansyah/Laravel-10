<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index()
    {
        return \view('login.register');
    }
}
