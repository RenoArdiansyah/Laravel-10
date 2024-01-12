@extends('layouts.main')

@section('title', 'Post')

@section('contain')


    <article class="my-4">
        <h2>{{ $post->title }}</h2>
        <p class="px-3 text-black-50">
            create by. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none ">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        {{-- <p>{{ $post->body }}</p> --}}
        {!! $post->body !!}
    </article>
    <a href="/posts" class="pb-5">Kembali ke posts</a>
@endsection
