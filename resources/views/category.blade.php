@extends('layouts.main')

@section('title', isset($category) ? $category->name : 'Categories')

@section('content')
<div class="py-3">
  @if(isset($category))
    <h1 class="mb-3">{{ $category->name }}</h1>
    <p>Projects in this category:</p>
    @if($category->projects && $category->projects->count())
      <div class="row">
        @foreach($category->projects as $project)
          <div class="col-md-4">
            <div class="card p-3 mb-3">
              <h5>{{ $project->title }}</h5>
              <p class="mb-0">{{ Str::limit($project->description ?? '', 100) }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p>No projects in this category yet.</p>
    @endif
  @else
    <h1 class="mb-3">All Categories</h1>
    @if(isset($categories) && $categories->count())
      <ul class="list-group">
        @foreach($categories as $cat)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ url('/category?slug=' . $cat->slug) }}">{{ $cat->name }}</a>
            <span class="badge bg-secondary rounded-pill">{{ $cat->projects->count() ?? 0 }}</span>
          </li>
        @endforeach
      </ul>
    @else
      <p>No categories yet.</p>
    @endif
  @endif
</div>
@endsection
