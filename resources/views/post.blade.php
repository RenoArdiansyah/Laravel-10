@extends('layouts.main')

@section('title', 'Post')

@section('contain')
    <div class="container" style="margin-top: 80px">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <img src="https://source.unsplash.com/1700x800?{{ $post->category->slug }}" class="img-fluid" alt="...">
                <h2 class="mt-2 mx-4">{{ $post->title }}</h2>
                <small class="px-5 text-muted">
                    Post by. <a href="/posts?author={{ $post->user->username }}"
                        class="text-decoration-none ">{{ $post->user->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </small>
                <article class="fs-4 py-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
        <a href="/posts" class="pb-5">Kembali ke posts</a>
    </div>
@endsection
