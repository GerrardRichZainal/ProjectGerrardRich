<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Gerrard Portfolio')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --light-bg: #f9f5f2;
      --dark-bg: #1e1b1a;
      --light-text: #3d2b2b;
      --dark-text: #f7f3f1;
      --accent: #a37565;
      --card-bg-light: #fff;
      --card-bg-dark: #2b2423;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
      color: var(--light-text);
      transition: all 0.4s ease-in-out;
    }
    body.dark-mode {
      background-color: var(--dark-bg);
      color: var(--dark-text);
    }
    .navbar {
      background-color: #6d4c41;
      transition: 0.4s;
    }
    body.dark-mode .navbar {
      background-color: #3a2c28;
    }
    .nav-link {
      color: white !important;
      transition: 0.3s;
    }
    .nav-link:hover {
      color: #ffcc80 !important;
    }
    footer {
      background-color: #4e342e;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
      transition: 0.3s;
    }
    body.dark-mode footer {
      background-color: #2b211f;
    }
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeIn 1s forwards;
    }
    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .card {
      background-color: var(--card-bg-light);
      border: none;
      border-radius: 15px;
      transition: transform 0.3s, background 0.3s;
    }
    body.dark-mode .card {
      background-color: var(--card-bg-dark);
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
    }
    .btn-toggle {
      background: var(--accent);
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 8px;
      transition: 0.3s;
    }
    .btn-toggle:hover {
      opacity: 0.85;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Gerrard’s Portfolio</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
      <div class="ms-3 d-flex align-items-center gap-2">
        <button id="darkToggle" class="btn-toggle">🌙 Dark</button>
        <select id="langSelect" class="form-select form-select-sm" style="width:90px;">
          <option value="en">EN</option>
          <option value="id">ID</option>
        </select>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5 fade-in" id="content">
  @yield('content')
</div>

<footer class="mt-5">
  <p>© 2025 Gerrard Rich Zainal | Crafted with ❤️ in Laravel + Bootstrap</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const darkBtn = document.getElementById('darkToggle');
  darkBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    darkBtn.textContent = document.body.classList.contains('dark-mode') ? '☀️ Light' : '🌙 Dark';
  });

  const langSelect = document.getElementById('langSelect');
  const pages = {
    about: { en: '/about', id: '/about?lang=id' },
    blog: { en: '/blog', id: '/blog?lang=id' },
    contact: { en: '/contact', id: '/contact?lang=id' },
    home: { en: '/', id: '/?lang=id' }
  };

  langSelect.addEventListener('change', () => {
    const lang = langSelect.value;
    const path = window.location.pathname;
    const current = Object.values(pages).find(v => v.en === path || v.id === path);
    if (current) window.location.href = lang === 'id' ? current.id : current.en;
  });
</script>
</body>
</html>
