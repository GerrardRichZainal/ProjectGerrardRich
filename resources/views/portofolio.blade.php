@extends('layouts.main')
@section('title','Portfolios')
@section('content')
<div class="text-center mb-4">
  <h1 class="fw-bold">Portfolios</h1>
  <p class="lead">Kumpulan project terorganisir per portfolio.</p>
</div>

<div class="row">
  @foreach($portfolios as $p)
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5>{{ $p->title }}</h5>
          <p class="text-muted">{{ $p->owner }}</p>
          <p>{{ $p->description }}</p>
          <hr>
          <h6>Projects</h6>
          <ul>
            @foreach($p->projects as $proj)
              <li>{{ $proj->name }} <small class="text-muted">({{ $proj->category->name ?? '-' }})</small></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
