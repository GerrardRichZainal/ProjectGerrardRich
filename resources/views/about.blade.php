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
        Passionate about <b>UI/UX design</b> and <b>Data Science / AI</b>.<br>
        I love turning ideas and data into creative, impactful, and intelligent designs.
      </p>

      <h5 class="mt-4 fw-semibold">💼 Skills</h5>
      <div class="row g-3">
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>UI/UX Design</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-brown" style="width:95%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>Frontend (HTML, CSS, Bootstrap)</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-brown" style="width:85%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>Data Analysis</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-info" style="width:80%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>AI / Machine Learning</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-info" style="width:70%"></div>
            </div>
          </div>
        </div>
      </div>

      <h5 class="mt-4 fw-semibold">🌐 Languages</h5>
      <ul>
        <li>Indonesian — 100%</li>
        <li>English — 70%</li>
      </ul>

    @else
      <p class="mt-3">
        Saya adalah mahasiswa <b>Informatika</b> di <b>Universitas Ciputra Surabaya – Kampus Kota Makassar</b>.<br>
        Saya memiliki passion di <b>UI/UX design</b> dan <b>Data / AI</b>.<br>
        Saya suka mengubah ide dan data menjadi desain kreatif, berdampak, dan cerdas.
      </p>

      <h5 class="mt-4 fw-semibold">💼 Keahlian</h5>
      <div class="row g-3">
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>UI/UX Design</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-brown" style="width:95%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>Frontend (HTML, CSS, Bootstrap)</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-brown" style="width:85%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>Data Analysis</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-info" style="width:80%"></div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card p-3 shadow-sm hover-scale">
            <h6>AI / Machine Learning</h6>
            <div class="progress" style="height:6px;">
              <div class="progress-bar bg-info" style="width:70%"></div>
            </div>
          </div>
        </div>
      </div>

      <h5 class="mt-4 fw-semibold">🌐 Bahasa</h5>
      <ul>
        <li>Bahasa Indonesia — 100%</li>
        <li>Bahasa Inggris — 70%</li>
      </ul>

    @endif
  </div>
</div>

<style>
.hover-scale { transition: transform 0.4s ease; }
.hover-scale:hover { transform: scale(1.05); }

.progress-bar { transition: width 1s ease-in-out; }
</style>
@endsection
