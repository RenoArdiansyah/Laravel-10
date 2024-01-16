@extends('dashboard.layouts.main')

@section('title', 'My Posts')

@section('container')
@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@elseif (session()->has('destroy'))
  <div class="alert alert-danger" role="alert">
    {{ session('destroy') }}
  </div>
@endif
<div class="table-responsive">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm ">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Created at</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        @foreach ($posts as $post)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->created_at->diffForHumans()  }}</td>
            <td>
              <div class="d-flex">
                  <a href="/dashboard/posts/{{ $post->slug }}" class="badge mx-1 p-1 bg-info">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                          <line x1="19" y1="12" x2="5" y2="12"></line>
                          <polyline points="12 19 5 12 12 5"></polyline>
                      </svg>
                  </a>
          
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge mx-1 p-1 bg-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                          <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                          <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                      </svg>
                  </a>
                  
                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" onsubmit="return confirm('Yakin Mau hapus data')">
                      @method('delete')
                      @csrf
                      <button class="badge mx-1 p-1 bg-danger border-0" type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                              <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                              <line x1="18" y1="9" x2="12" y2="15"></line>
                              <line x1="12" y1="9" x2="18" y2="15"></line>
                          </svg>
                      </button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
      <tbody>
      </tbody>
    </table>
  </div>
@endsection