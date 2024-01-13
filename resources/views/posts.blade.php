@extends('layouts.main')

@section('title', 'Posts')

@section('contain')
    <h1 class="pt-5">ini halaman posts</h1>

    <hr>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-body">{{ $post->title }}</a>
            </h2>
            <p class="px-3 text-black-50">
                create by. <a href="/authors/{{ $post->user->username }}"class="text-decoration-none ">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            {{-- <h5>{{ $post['pembuat'] }}</h5> --}}
            <p class="text-justify">
                {{ $post->body }}
            </p>
            <hr>
        </article>
    @endforeach
@endsection
