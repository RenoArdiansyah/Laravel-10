@extends('dashboard.layouts.main')

@section('container')
<div class="container" style="margin-top: 80px">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <img src="https://source.unsplash.com/1700x800?{{ $post->category->slug }}" class="img-fluid" alt="...">
            <h2 class="mt-2 mx-4">{{ $post->title }}</h2>
            <a href="#" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>
            <article class="fs-4 py-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection