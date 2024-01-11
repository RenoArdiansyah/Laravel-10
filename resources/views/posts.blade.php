@extends('layouts.main')

@section('title', 'Posts')

@section('contain')
    <h1>ini halaman posts</h1>

    <hr>
    @foreach ($posts as $post)
        <article>
            <h2> 
        <a href="/post/{{ $post['slug'] }}" class="text-decoration-none text-body">{{ $post['title'] }}</a>
            </h2>
            {{-- <h5>{{ $post['pembuat'] }}</h5> --}}
            <h6 class="px-3 text-black-50">create by. <a href="/personal/{{ $post['pembuat'] }}" class="text-decoration-none ">{{ $post['pembuat'] }}</a></h6>
            <p>
                {{ $post['body'] }}
            </p>
            <hr>
        </article>
    @endforeach
@endsection
