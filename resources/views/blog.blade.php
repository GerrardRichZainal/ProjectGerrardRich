@extends('layouts.main')
@section('title','Blog')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="text-center mb-4">
  <h1 class="fw-bold text-brown">{{ $lang==='id'?'Blog Saya':'My Blog' }}</h1>
  <p class="lead">{{ $lang==='id'?'Berbagi ide, refleksi, dan proyek yang membentuk perjalanan saya.':'Insights, reflections, and projects that shaped my journey.' }}</p>
</div>

<div class="row g-4 mt-4">
  @if($lang==='en')
    <x-blog-card title="🌍 “SuaraKu” Impact" text="How technology can create safe spaces and inspire social change."/>
    <x-blog-card title="🧠 Biomedical Design" text="Design thinking meets healthcare through UI/UX for better patient care."/>
    <x-blog-card title="💡 AI and Empathy" text="Exploring how artificial intelligence can amplify human creativity."/>
  @else
    <x-blog-card title="🌍 Dampak “SuaraKu”" text="Bagaimana teknologi bisa menciptakan ruang aman dan perubahan sosial positif."/>
    <x-blog-card title="🧠 Desain Biomedis" text="Menggabungkan design thinking dengan inovasi kesehatan demi perawatan yang lebih manusiawi."/>
    <x-blog-card title="💡 AI dan Empati" text="Mengeksplorasi bagaimana kecerdasan buatan dapat memperkuat kreativitas manusia."/>
  @endif
</div>
@endsection
