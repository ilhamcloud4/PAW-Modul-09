<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio | Portofolio Saya</title>
  @vite(['resources/sass/app.scss', 'resources/sass/web.scss'])
</head>
<body>
  <header><div class="container header-inner">
    <a class="brand" href="{{ url('/webstatis') }}">Portofolio Saya</a>
    <nav aria-label="Navigasi utama">
    <a href="{{ url('/webstatis') }}">Beranda</a>
    <a href="{{ url('/webstatis/about') }}">Tentang</a>
    <a class="active" href="{{ url('/webstatis/portfolio') }}">Portofolio</a>
    <a href="{{ url('/webstatis/contact') }}">Kontak</a>
    </nav>
  </div></header>
  <main class="container">
    <section class="card"><span class="tag">Hasil Belajar</span><h1>Portofolio / Proyek</h1><p>Berikut contoh proyek tugas kuliah</p>
      <div class="grid">
        <article class="project"><h3>1. Website HTML & CSS</h3><p>Membuat halaman website sederhana dengan struktur HTML, navigasi, dan desain CSS.</p></article>
        <article class="project"><h3>2. Praktikum Jaringan</h3><p>Melakukan konfigurasi alamat IP serta menguji koneksi jaringan menggunakan ping.</p></article>
        <article class="project"><h3>3. Web Server & DNS</h3><p>Mengonfigurasi Nginx dan BIND pada Rocky Linux agar website bisa diakses menggunakan nama domain lokal.</p></article>
      </div>
    </section>
  </main>
  <footer><p>Ilham_108052500036</p></footer>
  @vite('resources/js/app.js')
</body>
</html>
