@extends('dashboard.layouts.main')

@section('title', 'My Posts')

@section('container')
<div class="" style="margin-top: 10px">
  <div class="row justify-content-center mt-5">
    <div class="col-md-10">
      @if ($post->image)
        <div class="mb-4" style="max-height: 350px; overflow: hidden;">
          <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="Post Image">
        </div>
      @else
        <img src="https://source.unsplash.com/1700x800?{{ $post->category->slug }}" class="img-fluid" alt="Default Image">
      @endif

      <h2 class="mt-2 mx-4">{{ $post->title }}</h2>

      <div class="d-flex">
        <a href="/dashboard/posts" class="btn btn-success mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-arrow-left">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
          </svg>
          Kembali
        </a>

        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mr-2 mx-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-edit">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
          </svg>
          Edit
        </a>

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" onsubmit="return confirm('Yakin Mau hapus data')">
          @method('delete')
          @csrf
          <button class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-delete">
              <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
              <line x1="18" y1="9" x2="12" y2="15"></line>
              <line x1="12" y1="9" x2="18" y2="15"></line>
            </svg>
            Delete
          </button>
        </form>
      </div>
      <article class="fs-4 py-5 container" style="max-width: 100%; overflow-x: auto; white-space: pre-line; word-wrap: break-word;">
        {!! $post->body !!}
      </article>
      
    </div>
  </div>
</div>

@endsection