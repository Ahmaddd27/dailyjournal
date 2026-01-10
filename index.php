<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS PBW BOOTSTRAP</title>
    <link rel="icon" href="img/logo.jpg"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"/>
    <style>
      /* efek hover ringan & jaga agar gambar card rapi */
      .card:hover { transform: scale(1.02); transition: transform .25s ease; }
      .card img { height: 220px; object-fit: cover; }
      /* supaya hero di layar kecil tampil rapi (teks dulu, lalu gambar) */
      .hero-flex { display: flex; flex-direction: column-reverse; align-items: center; gap: 1rem; }
      @media(min-width: 576px){ .hero-flex { flex-direction: row; } }
    </style>
    <style>
  body.dark-mode {
    background-color: #121212 !important;
    color: white !important;
  }

  .dark-mode .navbar {
    background-color: #1e1e1e !important;
    border-color: rgba(255,255,255,.1) !important;
  }

  .dark-mode #schedule,
  .dark-mode #about {
    background-color: #1e1e1e !important;
    color: white !important;
  }

  .dark-mode .card {
    background-color: #2a2a2a !important;
    color: white !important;
    border-color: rgba(255,255,255,.1) !important;
  }

  .dark-mode .accordion-button {
    background-color: #333 !important;
    color: white !important;
  }

  .dark-mode footer {
    background-color: #1e1e1e !important;
    color: white !important;
  }
  .dark-mode .navbar a,
.dark-mode .navbar .navbar-brand,
.dark-mode .navbar .nav-link {
  color: white !important;
}

.dark-mode .navbar .nav-link:hover {
  color: #ff9dbc !important;  /* pink hover biar tetap aesthetic */
}

</style>

  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top shadow-sm" style="
  background-color: white;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"
      style="color: black; transition: all 0.3s ease; display: inline-block;"
      onmouseenter="this.style.color='#FFC0CB'; this.style.transform='scale(1.05)'; this.style.textShadow='0 0 8px #FFC0CB';"
      onmouseleave="this.style.color='black'; this.style.transform='scale(1)'; this.style.textShadow='none';">
      Bandspace
    </a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#hero"
            style="color: black; transition: all 0.3s ease;"
            onmouseenter="this.style.color='#FFC0CB';"
            onmouseleave="this.style.color='black';">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#article"
            style="color: black; transition: all 0.3s ease;"
            onmouseenter="this.style.color='#a78bfa';"
            onmouseleave="this.style.color='black';">
            Article
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#gallery"
            style="color: black; transition: all 0.3s ease;"
            onmouseenter="this.style.color='#FFC0CB';"
            onmouseleave="this.style.color='black';">
            Gallery
          </a>
        </li>

        <!-- 🔹 Menu baru -->
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#schedule"
            style="color: black; transition: all 0.3s ease;"
            onmouseenter="this.style.color='#a78bfa';"
            onmouseleave="this.style.color='black';">
            Schedule
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#about"
            style="color: black; transition: all 0.3s ease;"
            onmouseenter="this.style.color='#FFC0CB';"
            onmouseleave="this.style.color='black';">
            About Me
          </a>
        </li>
        
        <li class="nav-item">
  <a class="nav-link" href="login.php" target="_blank">Login</a>
</li>
  <!-- Theme Switcher -->
<li class="nav-item d-flex align-items-center ms-3">
  <button id="darkBtn" class="btn btn-dark btn-sm me-2">
    <i class="bi bi-moon-stars-fill"></i>
  </button>
  <button id="lightBtn" class="btn btn-light btn-sm border">
    <i class="bi bi-brightness-high-fill"></i>
  </button>
</li>
      </ul>
    </div>
  </div>
</nav>



<section id="hero" class="text-center p-5 text-white text-sm-start" style="background-color: #FFC0CB;">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>
        <h1 class="fw-bold display-5" style="color:black">
          Selamat Datang di <span style="color: black">Bandspace</span>
        </h1>
        <p class="lead mt-3" style="color:black">
          Temukan berbagai artikel menarik seputar dunia musik dan band-band lokal terbaik di Indonesia.
        </p>
      </div>
      <img src="img/banner.jpg" class="img-fluid rounded shadow-lg mt-4 mt-sm-0" width="400" alt="Banner Musik">
    </div>
  </div>
</section>


   <!-- Article Section -->
<section id="article" class="text-center p-5 bg-pink">
  <div class="container">
    <h1 class="fw-bold display-6 pb-4" style="color:#a78bfa">Local Band</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql);

      while ($row = $hasil->fetch_assoc()) {
      ?>
        <div class="col">
          <div class="card h-100 shadow-sm">

            <img src="img/<?php echo $row['gambar']; ?>"
                 class="card-img-top"
                 alt="<?php echo $row['judul']; ?>">

            <div class="card-body">
              <h5 class="card-title"><?php echo $row['judul']; ?></h5>
              <p class="card-text"><?php echo $row['isi']; ?></p>
            </div>

            <div class="card-footer">
              <small class="text-body-secondary">
                Diposting pada <?php echo $row['tanggal']; ?>
              </small>
            </div>

          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>


    <section id="gallery" class="text-center p-5 bg-dark text-white">
  <div class="container">
    <h1 class="fw-bold display-6 pb-4" style="color : #a78bfa">Gallery</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow-lg">
        <div class="carousel-item active">
          <img src="img/concert1.jpg" class="d-block w-100 rounded" alt="Konser Musik">
        </div>
        <div class="carousel-item">
          <img src="img/concert2.jpg" class="d-block w-100 rounded" alt="Musik Jazz">
        </div>
        <div class="carousel-item">
          <img src="img/concert3.jpg" class="d-block w-100 rounded" alt="Band Live">
        </div>
        <div class="carousel-item">
          <img src="img/concert4.jpg" class="d-block w-100 rounded" alt="Panggung Musik">
        </div>
        <div class="carousel-item">
          <img src="img/concert5.jpg" class="d-block w-100 rounded" alt="Festival Musik">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<<!-- Schedule Section -->
<section id="schedule" class="text-center p-5 bg-light">
  <div class="container">
    <h1 class="fw-bold display-6 pb-4">Schedule</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 justify-content-center">

      <!-- Membaca -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-book fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Membaca</h5>
          <p class="text-muted">Menambah wawasan setiap pagi sebelum beraktivitas.</p>
        </div>
      </div>

      <!-- Menulis -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-pencil-square fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Menulis</h5>
          <p class="text-muted">Mencatat setiap pengalaman harian di jurnal pribadi.</p>
        </div>
      </div>

      <!-- Diskusi -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-people fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Diskusi</h5>
          <p class="text-muted">Bertukar ide dengan teman dalam kelompok belajar.</p>
        </div>
      </div>

      <!-- Olahraga -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-bicycle fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Olahraga</h5>
          <p class="text-muted">Menjaga kesehatan dengan bersepeda sore hari.</p>
        </div>
      </div>

      <!-- Movie -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-film fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Movie</h5>
          <p class="text-muted">Menonton film yang bagus di bioskop.</p>
        </div>
      </div>

      <!-- Belanja -->
      <div class="col">
        <div class="card h-100 border-0 shadow-sm p-4">
          <i class="bi bi-bag fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Belanja</h5>
          <p class="text-muted">Membeli kebutuhan bulanan di supermarket.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- About Me Section -->
<section id="about" class="text-center p-5" style="background-color: #ffe4e8;">
  <div class="container">
    <h1 class="fw-bold display-6 pb-4">About Me</h1>

    <div class="accordion" id="accordionExample">
      <!-- Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: tomato;" style="text-decoration-color: white;">
            Universitas Dian Nuswantoro Semarang (2024–Now)
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body text-start">
            <strong>This is the first item's accrodion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            SMA Negeri 1 Semarang (2021–2024)
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body text-start">
            
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            SMP Negeri 2 Semarang (2018–2021)
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body text-start">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




    <!-- Footer -->
    <footer class="text-center p-4 bg-light border-top mt-5">
      <div class="mb-2">
        <a href="https://www.instagram.com/ahmdrffiji" class="text-danger mx-2 fs-4" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/62895414118873" class="text-success mx-2 fs-4" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="https://discord.com/users/1304810443910414378" class="text-primary mx-2 fs-4" target="_blank"><i class="bi bi-discord"></i></a>
      </div>
      <div class="fw-semibold">
        Ahmad Ariffi Ajining P - 2025-A11.2024.15653
      </div>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
    </script>
    
    <script>
  const darkBtn = document.getElementById("darkBtn");
  const lightBtn = document.getElementById("lightBtn");

  darkBtn.onclick = () => {
    document.body.classList.add("dark-mode");
  };

  lightBtn.onclick = () => {
    document.body.classList.remove("dark-mode");
  };
  </script>

  </body>
</html>



