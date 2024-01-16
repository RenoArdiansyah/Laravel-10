@extends('layouts.main')

@section('title', 'Category')

@section('contain')
<div class="container" style="margin-top: 80px">
  <h2 class="mt-5 text-center">Categories</h2>
  <hr>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 py-3">
    @foreach ($bodys as $body)
    <div class="col">
      <div class="border text-center hover" style="background-color: rgba(0, 0, 0, 0.2);"> <a
          class="text-decoration-none text-dark btn p-3" href="/posts?category={{ $body->slug }}" role="button">{{
          $body->name }}</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection