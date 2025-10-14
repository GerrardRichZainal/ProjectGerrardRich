@extends('layouts.main')
@section('title','Home')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="text-center mb-4" data-aos="fade-down">
  <h1>{{ $lang==='id'?'Selamat Datang di Portfolio':'Welcome to My Portfolio' }}</h1>
  <p>{{ $lang==='id'?'Jelajahi dunia kreatifitas dan coding saya.':'Discover my world of creativity and coding passion.' }}</p>
</div>

<div class="row mt-5">
  <div class="col-md-4" data-aos="fade-up">
    <div class="card shadow-sm p-4">
      <h5>{{ $lang==='id'?'Project Showcase':'Project Showcase' }}</h5>
      <p>{{ $lang==='id'?'Lihat beberapa project Laravel dan Flutter terbaik saya.':'Explore my best Laravel and Flutter projects.' }}</p>
      <a href="/blog?lang={{$lang}}" class="btn btn-brown btn-sm">{{ $lang==='id'?'Lihat':'See More' }}</a>
    </div>
  </div>
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <div class="card shadow-sm p-4">
      <h5>{{ $lang==='id'?'About Me':'About Me' }}</h5>
      <p>{{ $lang==='id'?'Pelajari perjalanan saya sebagai mahasiswa dan inovator.':'Learn about my journey as a tech student and innovator.' }}</p>
      <a href="/about?lang={{$lang}}" class="btn btn-brown btn-sm">{{ $lang==='id'?'Baca Selengkapnya':'Read More' }}</a>
    </div>
  </div>
</div>
@endsection
