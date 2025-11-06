@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
<div class="py-3">
  <h1 class="mb-3">Jobs</h1>
  @if(isset($jobs) && $jobs->count())
    <div class="list-group">
      @foreach($jobs as $job)
        <div class="list-group-item mb-2">
          <h5 class="mb-1">{{ $job->title }}</h5>
          <small class="text-muted">Slug: {{ $job->slug }}</small>
        </div>
      @endforeach
    </div>
  @else
    <p>No jobs found.</p>
  @endif
</div>
@endsection
