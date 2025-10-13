@extends('layout')

@section('title', 'About')

@section('content')
<div class="text-center mb-4" data-aos="fade-down">
  <button id="toggleLang" class="btn btn-outline-secondary btn-sm px-3 py-1 rounded-pill shadow-sm">
    EN
  </button>
</div>

<div id="aboutSection" class="row align-items-center justify-content-center px-3" data-aos="fade-up">
  <div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/profile.jpeg') }}" class="img-fluid rounded-circle shadow-lg border border-3 border-light-subtle hover-scale" alt="Gerrard" style="max-width: 250px;">
  </div>

  <div class="col-md-7">
    {{-- English Content --}}
    <div id="aboutContentEn">
      <h2 class="fw-bold text-brown">Gerrard Rich Zainal</h2>
      <p class="mt-3">
        I’m an <b>Informatics student</b> at <b>Universitas Ciputra Surabaya – Kampus Kota Makassar</b>.<br>
        I specialize in <b>UI/UX Design</b> and digital product development.<br>
        I love turning ideas into creative, impactful designs that connect with people.
      </p>

      <h5 class="mt-4 fw-semibold">💼 Skills</h5>
      <ul>
        <li>Figma, Adobe XD, Photoshop</li>
        <li>Prototyping & Wireframing</li>
        <li>Frontend with HTML, CSS, Bootstrap</li>
      </ul>

      <h5 class="mt-4 fw-semibold">🌐 Languages</h5>
      <ul>
        <li>Indonesian — 100%</li>
        <li>English — 70%</li>
      </ul>
    </div>

    {{-- Indonesian Content --}}
    <div id="aboutContentId" style="display:none;">
      <h2 class="fw-bold text-brown">Gerrard Rich Zainal</h2>
      <p class="mt-3">
        Saya adalah mahasiswa <b>Informatika</b> di <b>Universitas Ciputra Surabaya – Kampus Kota Makassar</b>.<br>
        Fokus saya pada <b>Desain UI/UX</b> dan pengembangan produk digital.<br>
        Saya suka mengubah ide menjadi desain kreatif yang berdampak dan mudah digunakan.
      </p>

      <h5 class="mt-4 fw-semibold">💼 Keahlian</h5>
      <ul>
        <li>Figma, Adobe XD, Photoshop</li>
        <li>Pembuatan prototipe & wireframe</li>
        <li>Frontend dengan HTML, CSS, Bootstrap</li>
      </ul>

      <h5 class="mt-4 fw-semibold">🌐 Bahasa</h5>
      <ul>
        <li>Bahasa Indonesia — 100%</li>
        <li>Bahasa Inggris — 70%</li>
      </ul>
    </div>
  </div>
</div>

<style>
  .text-brown { color: #5a3e2b; }
  .hover-scale { transition: transform 0.4s ease; }
  .hover-scale:hover { transform: scale(1.05); }
</style>

<script>
  AOS.init({ duration: 1000 });

  document.getElementById("toggleLang").addEventListener("click", () => {
    const en = document.getElementById("aboutContentEn");
    const id = document.getElementById("aboutContentId");
    const btn = document.getElementById("toggleLang");

    if (btn.textContent === "EN") {
      en.style.display = "none";
      id.style.display = "block";
      btn.textContent = "ID";
    } else {
      en.style.display = "block";
      id.style.display = "none";
      btn.textContent = "EN";
    }
  });
</script>
@endsection
