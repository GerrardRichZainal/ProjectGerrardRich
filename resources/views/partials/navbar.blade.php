<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6d4c41;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Gerrard Portfolio</a>
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
        <button id="darkToggle" class="btn btn-sm btn-outline-light">🌙 Dark</button>
        <select id="langSelect" class="form-select form-select-sm" style="width:90px;">
          <option value="en" {{ request()->get('lang')==='en' ? 'selected' : '' }}>EN</option>
          <option value="id" {{ request()->get('lang')==='id' ? 'selected' : '' }}>ID</option>
        </select>
      </div>
    </div>
  </div>
</nav>
