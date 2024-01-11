@extends('layouts.main')

@section('title', 'Post')

@section('contain')


    <article class="my-4">
        <h2>{{ $post['title'] }}</h2>
        <h6 class="px-3 text-black-50">
            create by. <a href="/personal/{{ $post['pembuat'] }}"class="text-decoration-none ">{{ $post['pembuat'] }}</a>
        </h6>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/posts">Kembali ke posts</a>
@endsection
