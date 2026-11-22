<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Portofolio Saya</title>
  @vite(['resources/sass/app.scss', 'resources/sass/web.scss'])
</head>
<body>
  <header><div class="container header-inner">
    <a class="brand" href="{{ url('/webstatis') }}">Portofolio Saya</a>
    <nav aria-label="Navigasi utama">
    <a href="{{ url('/webstatis') }}">Beranda</a>
    <a href="{{ url('/webstatis/about') }}">Tentang</a>
    <a href="{{ url('/webstatis/portfolio') }}">Portofolio</a>
    <a class="active" href="{{ url('/webstatis/contact') }}">Kontak</a>
    </nav>
  </div></header>
  <main class="container">
    <section class="card"><span class="tag">Hubungi Saya</span><h1>Kontak</h1><p>Silakan menghubungi saya melalui informasi di bawah ini.</p>
      <p><strong>Email kampus:</strong>muhammadrqas@telkomuniveristy.ac.id</p>
      <p><strong>GitHub:</strong> <a href="https://github.com/ilhamcloud4" target="_blank" rel="noopener noreferrer">Profil GitHub</a></p>
      <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/muhammad-rosyid-qolbilham-ash-shof-0ba448265/" target="_blank" rel="noopener noreferrer">Profil LinkedIn</a></p>
    </section>
  </main>
  <footer><p>Ilham_108052500036</p></footer>
  @vite('resources/js/app.js')
</body>
</html>
