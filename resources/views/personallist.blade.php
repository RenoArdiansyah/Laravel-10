@extends('layouts.main')

@section('title', $type)

@section('contain')

    @if($type === 'category')
        <h1 class="mt-2">Posts category: {{ $title }}</h1>
    @elseif ($type === 'author')
        <h1 class="mt-2">author by: {{ $title }}</h1>
    @else
        <h1>title tidak ditemukan</h1>
    @endif
    <hr>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-body">{{ $post->title }}</a>
            </h2>
            <p class="px-3 text-black-50">
                create by. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none ">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            {{-- <h5>{{ $post['pembuat'] }}</h5> --}}

            {{ $post->body }}
            </p>
            <hr>
        </article>
    @endforeach
@endsection
