@extends('layouts.main')

@section('title', 'Abouts')

@section('contain')
    <h1>Ini adalah halaman Abouts</h1>
    <ul>
        <li>nama    : {{ $name }}</li>
        <li>email   : {{ $email }}</li>
        <li>image   : <img src="img/{{ $img }}" alt="{{ $img }}"></li>
    </ul>
    
@endsection

