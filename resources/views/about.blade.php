<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Saya | Portofolio Saya</title>
  @vite(['resources/sass/app.scss', 'resources/sass/web.scss'])
</head>
<body>
  <header><div class="container header-inner">
    <nav aria-label="Navigasi utama">
    <a href="{{ url('/webstatis') }}">Beranda</a>
    <a class="active" href="{{ url('/webstatis/about') }}">Tentang</a>
    <a href="{{ url('/webstatis/portfolio') }}">Portofolio</a>
    <a href="{{ url('/webstatis/contact') }}">Kontak</a>
    </nav>
  </div></header>
  <main class="container">
    <section class="card"><span class="tag">Profil</span><h1>Tentang Saya</h1><p>Perkenalkan, saya <strong>MUHAMMAD ROSYID QOLBILHAM ASH SHOF</strong> dengan NIM <strong>108052500036</strong>. Saat ini saya sedang berkuliah di <strong>Telkom University Surabaya dari program studi S1 Sistem Infomasi</strong>.</p></section>
    <section class="card"><h2>Pendidikan</h2><p>Telkom University Surabaya, S1 Sistem Infomasi, Semester 3</p></section>
    <section class="card"><h2>Keahlian</h2><ul><li>Dasar HTML dan CSS</li><li>Penggunaan Linux</li><li>Konfigurasi jaringan komputer</li></ul></section>
    <section class="card"><h2>Minat</h2><p>Saya tertarik mempelajari administrasi server, jaringan komputer, dan teknologi web.</p></section>
  </main>
  <footer><p>Ilham_108052500036</p></footer>
</body>
</html>
