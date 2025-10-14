<!DOCTYPE html>
<html lang="{{ request()->get('lang','en') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Gerrard Portfolio')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    :root {
      --light-bg:#f9f5f2; --dark-bg:#1e1b1a;
      --light-text:#3d2b2b; --dark-text:#f7f3f1;
      --accent:#a37565; --card-bg-light:#fff; --card-bg-dark:#2b2423;
    }
    body { font-family: 'Poppins',sans-serif; background:var(--light-bg); color:var(--light-text); transition:0.4s;}
    body.dark-mode { background:var(--dark-bg); color:var(--dark-text);}
    .card { border-radius:15px; transition:transform 0.3s, background 0.3s; background:var(--card-bg-light);}
    body.dark-mode .card { background:var(--card-bg-dark); color:var(--dark-text);}
    .card:hover { transform:translateY(-6px); box-shadow:0 6px 18px rgba(0,0,0,0.2);}
    .btn-brown { background-color:var(--accent); color:#fff; border:none; }
    .btn-brown:hover { opacity:0.85; }
    .text-brown{ color:#5a3e2b;}
  </style>
</head>
<body class="@yield('body-class')">

@include('partials.navbar')

<div class="container mt-5 fade-in" id="content">
  @yield('content')
</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({duration:1000});

  // Dark Mode
  const darkBtn = document.getElementById('darkToggle');
  if(darkBtn){ darkBtn.addEventListener('click', ()=>{
    document.body.classList.toggle('dark-mode');
    darkBtn.textContent = document.body.classList.contains('dark-mode') ? '☀️ Light' : '🌙 Dark';
  })}

  // Language EN/ID
  const langSelect = document.getElementById('langSelect');
  if(langSelect){
    langSelect.addEventListener('change', ()=>{
      const lang = langSelect.value;
      let url = new URL(window.location.href);
      url.searchParams.set('lang', lang);
      window.location.href = url.toString();
    });
  }
</script>
@yield('scripts')
</body>
</html>
