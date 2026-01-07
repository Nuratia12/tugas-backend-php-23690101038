<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Pribadi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
      <div class="header-container">
    <h1>Portofolio Saya</h1>
    <p>Selamat datang di halaman pribadi saya!</p>
      </div>
  </header>

  <nav>
    <ul>
      <li><a href="#tentang">Tentang Saya</a></li>
      <li><a href="#keahlian">Keahlian</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>
  </nav>

    <h2>Kirim Pesan</h2>

  <form action="/contact" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Pesan:</label><br>
    <textarea name="message" rows="4" required></textarea><br><br>

    <button type="submit">Kirim</button>
  </form>
</section>

  <main>

    <section id="tentang">
      <h2>Tentang Saya</h2>
      <article>
        <h3>Profil Singkat</h3>
        <p>
          Mahasiswa yang kreatif dan terbuka terhadap hal-hal baru. Suka belajar, beradaptasi, dan berbagi ide positif untuk tumbuh bersama orang lain. perkenalkan nama Tri Umyah Divananti.
        </p>
        <img src="tri umyah.jpeg" alt="tri umyah">
      </article>
    </section>

    <section id="keahlian">
      <h2>Keahlian</h2>
      <article>
        <h3>Pengalaman & Skill</h3>
        <ul>
          <li>Dasar Microsoft</li>
        </ul>
      </article>
    
    </section>

          <article>
      <header>
        <h3> Artikel Tentang Flexbox dan CSS Grid</h3>
      </header>
      <p> Oleh Tri Umyah Divananti - 06 November 2025</p>
      <p>artikel ini menjelaskan tentang flexbox dan CSS Grid</p> 
    </article>

    <aside>
      <h3>Media Sosial</h3>
      <ul>
        <li><a href="https://www.instagram.com/_adelagustina?igsh=MTIzeWp6eXZuNnptcg==">Instagram</a></li>
        <li><a href="https://www.tiktok.com/@ig_adelagustina?_t=ZS-90wgrzCoHax&_r=1">TikTok</a></li>
      </ul>
    </aside>

  </main>

  <section class="gallery">
    <h2>gallery proyek</h2>
    <div class="grid-container">
      <div class="tombol-utama">
        <img src="belajar.jpeg" alt="foto membaca">
      </div>
      <div class="tombol-utama">
        <img src="lari.jpeg" alt="foto mendengarkan-musik">
      </div>
  </section>

  <div class="interactive-buttons">
    <button id="toggleTheme">Toggle Theme</button>
    <button id="greetBtn">Sapa Pengunjung</button>
    <h2 id="greeting"></h2>
  </div>
 
  <footer id="kontak">
    <p>&copy; 2025 Adel Agustina. Semua hak cipta dilindungi.</p>
    <p>Email: adelagustina079@gmail.com</p>
  </footer>

  <script src="sricpt.js"></script>

</body>
</html>