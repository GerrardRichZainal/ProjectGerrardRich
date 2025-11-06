@extends('layouts.main')
@section('title', 'Portfolio')
@section('content')
<h1 class="mb-4">Portfolio List</h1>
<div class="row">
  @forelse($portfolios as $portfolio)
    <div class="col-md-4 mb-3">
      <div class="card p-3">
        <h5>{{ $portfolio->title }}</h5>
        <p>{{ $portfolio->description }}</p>
        <small>Category: <a href="{{ url('/category?slug=' . ($portfolio->category->slug ?? '')) }}">{{ $portfolio->category->name ?? '-' }}</a></small><br>
        <small>Job: <a href="{{ url('/jobs') }}">{{ $portfolio->job->title ?? '-' }}</a></small>
      </div>
    </div>
  @empty
    <p>No portfolio found.</p>
  @endforelse
</div>
@endsection
