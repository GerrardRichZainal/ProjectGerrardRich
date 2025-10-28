<!DOCTYPE html>
<html lang="{{ request()->get('lang')==='id'?'id':'en' }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','Portfolio')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      transition: background-color 0.3s, color 0.3s;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
    }

    .btn-brown {
      background-color: #8B4513;
      color: white;
    }

    .btn-brown:hover {
      background-color: #A0522D;
      color: white;
    }

    footer {
      background-color: #8B4513;
      color: white;
      text-align: center;
      padding: 1rem;
    }

    body.dark-mode {
      background-color: #121212;
      color: #e0e0e0;
    }

    body.dark-mode .card {
      background-color: #1f1f1f;
      color: #e0e0e0;
    }

    body.dark-mode footer {
      background-color: #8B4513;
      color: white;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg" style="background-color:#8B4513;">
    <div class="container">
      <a class="navbar-brand text-white" href="/">Portfolio</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
          <li class="nav-item"><a class="nav-link text-white" href="/home">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="/about">About</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="/project">Project</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="/experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="/blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>

          <li class="nav-item ms-3">
            <button id="toggleDark" class="btn btn-sm btn-light">🌙</button>
          </li>
          <li class="nav-item ms-2">
            <select id="langSelect" class="form-select form-select-sm">
              <option value="en" {{ request()->get('lang')==='en'?'selected':'' }}>EN</option>
              <option value="id" {{ request()->get('lang')==='id'?'selected':'' }}>ID</option>
            </select>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-5">
    @yield('content')
  </main>

  <footer class="mt-auto">
    &copy; 2025 Created by Gerrard Rich Zainal
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();

    const btn = document.getElementById('toggleDark');
    btn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      btn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
    });

    const langSelect = document.getElementById('langSelect');
    langSelect.addEventListener('change', () => {
      const lang = langSelect.value;
      const currentUrl = new URL(window.location.href);
      currentUrl.searchParams.set('lang', lang);
      window.location.href = currentUrl.href;
    });
  </script>
</body>
</html>
