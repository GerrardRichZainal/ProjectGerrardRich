@extends('layouts.main')
@section('title','About')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="row align-items-center justify-content-center px-3 mt-4" data-aos="fade-up">
  <div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/profile.jpeg') }}" class="img-fluid rounded-circle shadow-lg border border-3 border-light-subtle hover-scale" alt="Gerrard" style="max-width:250px;">
  </div>

  <div class="col-md-7">
    <h2 class="fw-bold text-brown">Gerrard Rich Zainal</h2>

    @if($lang==='en')
      <p class="mt-3">
        I’m an <b>Informatics student</b> at <b>Universitas Ciputra Surabaya – Kampus Kota Makassar</b>.<br>
        I specialize in <b>UI/UX Design</b> and digital product development.<br>
        I love turning ideas into creative, impactful designs that connect with people.
      </p>
      <h5 class="mt-4 fw-semibold">💼 Skills</h5>
      <div class="mb-2">Figma & Adobe XD</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-brown" role="progressbar" style="width:90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="mb-2">Frontend (HTML, CSS, Bootstrap)</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-brown" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <h5 class="mt-4 fw-semibold">🌐 Languages</h5>
      <div class="mb-2">Indonesian</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-success" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="mb-2">English</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-info" role="progressbar" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    @else
      <p class="mt-3">
        Saya adalah mahasiswa <b>Informatika</b> di <b>Universitas Ciputra Surabaya – Kampus Kota Makassar</b>.<br>
        Fokus saya pada <b>Desain UI/UX</b> dan pengembangan produk digital.<br>
        Saya suka mengubah ide menjadi desain kreatif yang berdampak dan mudah digunakan.
      </p>

      <h5 class="mt-4 fw-semibold">💼 Keahlian</h5>
      <div class="mb-2">Figma & Adobe XD</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-brown" role="progressbar" style="width:90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="mb-2">Frontend (HTML, CSS, Bootstrap)</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-brown" role="progressbar" style="width:90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <h5 class="mt-4 fw-semibold">🌐 Bahasa</h5>
      <div class="mb-2">Bahasa Indonesia</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-success" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="mb-2">Bahasa Inggris</div>
      <div class="progress mb-3" style="height:8px;">
        <div class="progress-bar bg-info" role="progressbar" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    @endif
  </div>
</div>

<style>
.hover-scale { transition: transform 0.4s ease; }
.hover-scale:hover { transform: scale(1.05); }

/* Optional: progress bar animation */
.progress-bar {
  transition: width 1s ease-in-out;
}
</style>
@endsection
