@extends('layouts.main')

@section('title', 'Posts')

@section('contain')
    @if ($posts->count())
        <div class="card mb-3 mt-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://source.unsplash.com/1700x1000?{{ $posts[0]->category->slug }}"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 align-content-center my-auto">
                    <div class="card-body">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-body">{{ $posts[0]->title }}</a></h3>
                        <small class="px-3 text-muted">
                            Post by. <a href="/authors/{{ $posts[0]->user->username }}"
                                class="text-decoration-none ">{{ $posts[0]->user->name }}</a> in <a
                                href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        </small>
                        <p class="card-text">{!! $posts[0]->body !!}</p>
                        <p class="card-muted"><small class="text-muted">Last updated
                                {{ $posts[0]->created_at->diffForHumans() }}</small>
                        </p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-success mt-3">Read More..</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 99%;">
                        <img src="https://source.unsplash.com/1200x800?{{ $post->category->slug }}" class="card-img-top" alt="">
                        <a class="btn btn-outline-light position-absolute m-2" style="background-color: rgba(0, 0, 0, 0.3)" href="/categories/{{ $post->category->slug }}" role="button">{{ $post->category->name }}</a>

                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-body">{{ $post->title }}</a></h5>
                            <small class="px-3 text-muted">
                                by. <a href="/authors/{{ $post->user->username }}"
                                    class="text-decoration-none ">{{ $post->user->name }}</a>
                            </small>
                            <p class="card-muted"><small class="text-muted">Last updated
                                {{ $posts[0]->created_at->diffForHumans() }}</small>
                        </p>
                            <p class="card-text"> {!! $post->body !!} </p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4">
            no found.
        </p>
    @endif
@endsection
