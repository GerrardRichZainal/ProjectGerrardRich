@extends('layouts.main')
@section('title','Contact')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="text-center mt-5" data-aos="fade-down">
  <h1>{{ $lang==='id'?'Hubungi Saya':'Contact Me' }}</h1>
  <p>{{ $lang==='id'?'Ada pertanyaan atau ide kolaborasi? Mari terhubung!':'Have a question or collaboration idea? Let’s connect!' }}</p>
</div>

<form class="mt-4" style="max-width:500px; margin:0 auto;" data-aos="fade-up">
  <div class="mb-3">
    <label for="name" class="form-label">{{ $lang==='id'?'Nama':'Name' }}</label>
    <input type="text" class="form-control" id="name" placeholder="{{ $lang==='id'?'Nama Anda':'Your name' }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="you@example.com">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">{{ $lang==='id'?'Pesan':'Message' }}</label>
    <textarea class="form-control" id="message" rows="3" placeholder="{{ $lang==='id'?'Tulis pesan Anda di sini...':'Write your message here...' }}"></textarea>
  </div>
  <button type="submit" class="btn btn-brown">{{ $lang==='id'?'Kirim Pesan':'Send Message' }}</button>
</form>
@endsection
