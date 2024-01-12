@extends('layouts.main')

@section('title',  'Category' )

@section('contain')
    <h1 class="mt-2">list category:</h1>
    <hr>
    <ul>
        @foreach ($bodys as $body)
            <li><a href="/categories/{{ $body->slug }}">{{ $body->name }}</a></li>
        @endforeach
    </ul>
@endsection
