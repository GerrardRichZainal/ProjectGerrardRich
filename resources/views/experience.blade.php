@extends('layouts.main')
@section('title', 'Experience')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="text-center mb-5">
  <h1 class="fw-bold text-brown">{{ $lang==='id'?'Pengalaman Saya':'My Experience' }}</h1>
  <p class="lead">{{ $lang==='id'?'Perjalanan karier dan pembelajaran yang membentuk kemampuan saya.':'Career journey and experiences that shaped my skills.' }}</p>
</div>

<div class="row g-4">
  @foreach($experiences as $exp)
  <div class="col-md-6" data-aos="fade-up">
    <div class="card shadow-sm border-0" style="background-color: white; color: #333;">
      <div class="card-body">
        <h5 class="fw-bold">{{ $exp->title }}</h5>
        <p class="text-muted mb-1">{{ $exp->company }} — {{ $exp->duration }}</p>
        <p class="mb-2">{{ $exp->description }}</p>
        @if($exp->skills)
        <small class="text-secondary">Skills: {{ $exp->skills }}</small>
        @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
