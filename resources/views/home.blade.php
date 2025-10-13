@extends('layout')

@section('title', 'Home')

@section('content')
<div class="hero">
  <h1>Home</h1>
  <p>Discover my world of creativity and coding passion.</p>
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Project Showcase</h5>
          <p class="card-text">Explore my best Laravel and Flutter projects.</p>
          <a href="/blog" class="btn btn-sm btn-brown">See More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">About Me</h5>
          <p class="card-text">Learn about my journey as a tech student and innovator.</p>
          <a href="/about" class="btn btn-sm btn-brown">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
