@extends('layouts.main')
@section('title', 'Project')

@section('content')
<div class="text-center mb-4">
  <h1 class="fw-bold text-brown">My Projects</h1>
  <p class="lead">Here are some of the projects I've worked on.</p>
</div>

<div class="row g-4 mt-4">
  @forelse($projects as $project)
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        @if($project->image)
          <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $project->title }}</h5>
          @if($project->subtitle)
            <h6 class="text-muted">{{ $project->subtitle }}</h6>
          @endif
          <p class="card-text">{{ $project->description }}</p>
          @if($project->link)
            <a href="{{ $project->link }}" class="btn btn-primary" target="_blank">View Project</a>
          @endif
        </div>
      </div>
    </div>
  @empty
    <p class="text-center">No projects available.</p>
  @endforelse
</div>
@endsection
