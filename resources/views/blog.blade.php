@extends('layout')

@section('title', 'Blog')

@section('content')
@php
$lang = request()->get('lang') === 'id' ? 'id' : 'en';
@endphp

<div class="text-center mb-4">
  <button id="toggleDarkMode" class="btn btn-outline-secondary btn-sm">🌙</button>
</div>

<div class="container" id="blogContainer">
  @if($lang === 'en')
  <div class="text-center">
    <h1 class="fw-bold mb-4 text-brown">My Blog</h1>
    <p class="lead">Insights, reflections, and projects that shaped my journey.</p>
  </div>
  <div class="row g-4 mt-4">
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>🌍 “SuaraKu” Impact</h5><p>How technology can create safe spaces and inspire social change.</p></div></div>
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>🧠 Biomedical Design</h5><p>Design thinking meets healthcare through UI/UX for better patient care.</p></div></div>
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>💡 AI and Empathy</h5><p>Exploring how artificial intelligence can amplify human creativity.</p></div></div>
  </div>
  @else
  <div class="text-center">
    <h1 class="fw-bold mb-4 text-brown">Blog Saya</h1>
    <p class="lead">Berbagi ide, refleksi, dan proyek yang membentuk perjalanan saya.</p>
  </div>
  <div class="row g-4 mt-4">
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>🌍 Dampak “SuaraKu”</h5><p>Bagaimana teknologi bisa menciptakan ruang aman dan perubahan sosial positif.</p></div></div>
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>🧠 Desain Biomedis</h5><p>Menggabungkan design thinking dengan inovasi kesehatan demi perawatan yang lebih manusiawi.</p></div></div>
    <div class="col-md-4"><div class="card p-4 shadow-lg blog-card"><h5>💡 AI dan Empati</h5><p>Mengeksplorasi bagaimana kecerdasan buatan dapat memperkuat kreativitas manusia.</p></div></div>
  </div>
  @endif
</div>

<style>
  .blog-card {
    border-radius: 1rem;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }
  .blog-card:hover {
    transform: translateY(-5px);
  }

  /* 🌙 DARK MODE STYLING */
  .dark-mode {
    background-color: #1e1e1e !important;
    color: #f8f9fa !important;
  }
  .dark-mode .card {
    background-color: #2b2b2b !important;
    color: #f8f9fa !important;
    border: 1px solid #3a3a3a;
  }
  .dark-mode h1, .dark-mode h5 {
    color: #e0c097 !important;
  }
  .dark-mode .btn-outline-secondary {
    color: #f8f9fa;
    border-color: #f8f9fa;
  }
  .dark-mode .btn-outline-secondary:hover {
    background-color: #f8f9fa;
    color: #1e1e1e;
  }
</style>

<script>
  // Dark Mode Toggle
  const toggleBtn = document.getElementById('toggleDarkMode');
  const container = document.body;

  toggleBtn.addEventListener('click', () => {
    container.classList.toggle('dark-mode');
    toggleBtn.textContent = container.classList.contains('dark-mode') ? '☀️' : '🌙';
  });
</script>
@endsection
