<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | Portofolio Saya</title>
  @vite(['resources/sass/app.scss', 'resources/sass/web.scss'])
</head>
<body>
  <header><div class="container header-inner">
    <nav aria-label="Navigasi utama">
    <a class="active" href="{{ url('/webstatis') }}">Beranda</a>
    <a href="{{ url('/webstatis/about') }}">Tentang</a>
    <a href="{{ url('/webstatis/portfolio') }}">Portofolio</a>
    <a href="{{ url('/webstatis/contact') }}">Kontak</a>
    </nav>
  </div></header>
  <main class="container">
    <section class="card hero">
      <img class="avatar"
     src="{{ asset('img/ppweb.png') }}"
     alt="Avatar profil">
      <div>
        <span class="tag">Selamat datang!</span>
        <h1>Halo, saya Muhammad Rosyid Qolbilham Ash Shof</h1>
        <p><strong>NIM:</strong> 108052500036</p>
        <p>Website ini berisikan beberapa portofolio dan informasi tentang saya.</p>
        <a class="btn" href="{{ url('/webstatis/about') }}">
            Kenali Saya
        </a>
      </div>
    </section>
    <section class="card"><h2>Tentang Website Ini</h2><p>Website ini berisi profil singkat, kemampuan,dan informasi kontak saya.</p></section>
  </main>
  <footer><p>Ilham_108052500036</p></footer>
  @vite('resources/js/app.js')
</body>
</html>
