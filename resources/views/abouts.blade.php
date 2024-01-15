@extends('layouts.main')

@section('title', 'Abouts')

@section('contain')
    <div class="container" style="margin-top: 80px">
        <h1>Ini adalah halaman Abouts</h1>
        <ul>
            <li>nama : {{ $name }}</li>
            <li>email : {{ $email }}</li>
            <li>image : <img src="img/{{ $img }}" alt="{{ $img }}"></li>
        </ul>
    </div>

@endsection
