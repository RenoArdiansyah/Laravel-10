@extends('layouts.main')

@section('title', 'Category')

@section('contain')
    <h2 class="mt-5 text-center">Categories</h2>
    <hr>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 py-3">
            @foreach ($bodys as $body)
            <div class="col">
                <div class="p-3 border border text-center" style="background-color: rgba(0, 0, 0, 0.2)"> <a class="text-decoration-none text-dark " href="/categories/{{ $body->slug }}" role="button">{{ $body->name }}</a>
                </div>
            </div>
            @endforeach
        </div>

    {{-- @foreach ($bodys as $body)
        <a class="btn btn-outline-dark m-2 p-5" style="background-color: rgba(0, 0, 0, 0.3)"
            href="/categories/{{ $body->slug }}" role="button">{{ $body->name }}
        </a>
    @endforeach --}}
@endsection
