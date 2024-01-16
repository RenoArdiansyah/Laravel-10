@extends('dashboard.layouts.main')

@section('title', 'Create My Post')

@section('container')
<form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus
      value="{{ old('title') }}">
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required
      value="{{ old('slug') }}">
    @error('slug')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category :</label>
    <select class="form-select  @error('category_id') is-invalid @enderror" name="category_id">
      <option>Pilih Category</option>
      @foreach ($categories as $category)
      @if ($category->id == old('category_id'))
      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
      @else
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endif
      @endforeach
    </select>
    @error('category_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="image" class="form-label @error('image') is-invalid @enderror">Post image</label>
    <input class="form-control" type="file" id="image" name="image">
  </div>
  @error('image')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label for="body" class="form-label">Body :</label>
    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
    <trix-editor input="body"></trix-editor>
    @error('body')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>
</form>

<script>
  // Pastikan elemen dengan ID 'title' sudah ada di halaman
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch("/dashboard/checkSlug?title=" + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
                .catch(error => console.error('Error:', error));
        });
</script>
@endsection