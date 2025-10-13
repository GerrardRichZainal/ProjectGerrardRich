@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="hero">
  <h1>Contact Me</h1>
  <p>Have a question or collaboration idea? Let’s connect!</p>

  <form class="mt-4" style="max-width: 500px; margin: 0 auto;">
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Your name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message:</label>
      <textarea class="form-control" id="message" rows="3" placeholder="Write your message here..."></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Send Message</button>
  </form>
</div>
@endsection
