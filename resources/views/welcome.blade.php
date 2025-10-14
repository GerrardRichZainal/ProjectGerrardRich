@extends('layouts.main')
@section('title','Welcome')

@section('content')
@php $lang = request()->get('lang')==='id'?'id':'en'; @endphp

<div class="text-center mt-5" data-aos="fade-down">
  <h1>{{ $lang==='id'?'Halo, Saya Gerrard Rich!':'Hi, I\'m Gerrard Rich!' }}</h1>
  <p>{{ $lang==='id'?'Selamat datang di portfolio Laravel saya!':'Welcome to my Laravel portfolio site powered by Bootstrap.' }}</p>
  <a href="/home?lang={{$lang}}" class="btn btn-brown btn-lg mt-3">{{ $lang==='id'?'Masuk ke Portfolio':'Enter My Portfolio' }}</a>
</div>
@endsection
