<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Sederhana - Home, Artikel, Galeri</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

   <style>
    #home {
      background-image: url("img/22.jpeg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg " style="background-color: var(--bs-body-bg);">
      <div class="container">
        <a class="navbar-brand" href="#">aldi.speed</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About Me">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
          </ul>
          <button id="dark-mode" class="btn btn-outline ms-2" style="background-color: var(--bs-body-bg);">
            <i class="fas fa-moon"></i> Dark
          </button>
          <button id="light-mode" class="btn btn-outline ms-2" style="background-color: var(--bs-body-bg);">
            <i class="fas fa-sun"></i> Light
          </button>
        </div>
      </div>
    </nav>

    <section id="home" class="bg-light py-5">
      <div class="container text-center">
        <h1>Selamat Datang</h1>
        <h2>Selamat datang di Website Kabar Pembalap Motor Gp!</h2>
        <p class="lead">
            Selamat datang di portal berita terbaik, tempat Anda dapat menemukan
            informasi terbaru dan terlengkap tentang dunia balap motor GP!
        </p>
        <a href="#artikel" class="btn" style="background-color: var(--bs-body-bg);">Lihat Artikel</a>
      </div>
    </section>

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
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
<!-- article end -->

    <section id="galeri" class="container my-5">
  <h2 class="text-center mb-4"><b>Gallery</b></h2>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/46.jpg" class="d-block w-100" alt="Gambar 1" />
      </div>
      <div class="carousel-item">
        <img src="img/47.jpg" class="d-block w-100" alt="Gambar 2" />
      </div>
      <div class="carousel-item">
        <img src="img/78.jpg" class="d-block w-100" alt="Gambar 3" />
      </div>
    </div>

    <!-- Navigation Controls -->
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

    <section id="schedule" class="text-center p-5 bg-body-light">
      <div class="container-shedulee table-responsive">
        <div class="container-h2">
          <h2 class="fw-bold">Schedule</h2>
  
          <div>
          <div class="d-flex justify-content-center pt-3 gap-5">
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="text-align: center;"> SENIN</li>
                  <li class="list-group-item">Dasar Pemrograman 08.30-10.20 | H.4.7</li>
                  <li class="list-group-item">Kriptografi 12.00-14.20 | H.5.8</li>
              </ul>
            </div>
      
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem; text-align: center;"> SELASA</li>
                  <li class="list-group-item">Pendidikan Kewarganegaraan 10.20-12.00 | Aula.h.7</li>
                  <li class="list-group-item">Basis Data 07.00-09.30 | D.2.J</li>
              </ul>
            </div>
      
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem; text-align: center;"> RABU</li>
                  <li class="list-group-item">Sistem Oprasi 18.30-21.00 | H.4.10</li>
                  <li class="list-group-item">Basis Data 08.40-10.20 | H.4.1</li>
              </ul>
            </div>
      
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem; text-align: center;"> KAMIS</li>
                  <li class="list-group-item">Pemrograman Berbasis Web 08.40-10.20 | D.2.J</li>
                  <li class="list-group-item"> Logika Informatika 12.30-15.00 | H.4.10</li>
              </ul>
            </div>
          </div>
      <div>
        <div class="d-flex justify-content-end pt-3 gap-5">          <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem; text-align: center;"> JUMAT</li>
                  <li class="list-group-item">Rekayasa Perangkat Lunak 07.00-09.30 | H.5.10</li>
                  <li class="list-group-item">Basis Data 10.20-12.00 | D.3.M</li>
              </ul>
            </div>
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem; text-align: center;"> SABTU</li>
                  <li class="list-group-item">Probabilitas Dan Stastik 15.30-18.00 | D.3.M</li>
                  <li class="list-group-item">Keamanan Data 12.30-15.20 | D.3.M</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <hr style="border: 3px bg-secondary margin: 0;">
    <section id="About Me" class="py-5" style="background-color: var(--bs-body-bg);">
      <div class="container">
        <h2 class="text-center">About Me</h2>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-3 text-center text-md-start">
            <div class="col-md-3 text-center text-md-start">
  <img src="https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/71aac286042e724e350952edea3544bd.jpeg?lk3s=a5d48078&nonce=54830&refresh_token=ec2150e833bfe4a04184dc448d00e6aa&x-expires=1736798400&x-signature=DeSfh85%2FzOTAzqcDc%2Bf1cJKhgBA%3D&shp=a5d48078&shcp=81f88b70">
      </div>
     <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Info</title>
  <style>
    /* Styling untuk ID Mahasiswa */
    .student-id {
      font-size: 1.2rem; 
      color: #000000; 
      font-weight: bold; 
      margin-bottom: 10px; 
    }

    /* Styling untuk Nama Mahasiswa (agar tetap dalam satu baris) */
    .student-name {
      font-size: 2rem; 
      font-weight: 700; 
      color: #000000;
      white-space: nowrap; /* Memastikan teks tetap dalam satu baris */
      overflow: hidden; /* Menghindari overflow */
      text-overflow: ellipsis; /* Menambahkan '...' jika teks terlalu panjang */
      text-align: center; /* Memastikan teks berada di tengah */
      margin-bottom: 15px;
    }

    /* Styling untuk Program Studi dan Universitas */
    .student-info {
      font-size: 1.1rem;
      color: #000000; 
      line-height: 1.5;
      text-align: center;
    }

    /* Styling untuk Container */
    .col-md-6 {
      width: 100%; /* Pastikan kontainer memiliki cukup ruang */
      max-width: 600px; /* Tambahkan batas lebar maksimal untuk menjaga layout */
      margin: 0 auto; /* Agar elemen berada di tengah layar */
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="col-md-6">
    <p class="student-id">A11.2023.15056</p>
    <h2 class="student-name">Aldi Febriayanto</h2>
    <p class="student-info">
      Program Studi Teknik Informatika<br>
      Universitas Dian Nuswantoro
    </p>
  </div>
</body>

        </div>
      </div>
    </section>
    
    

    <hr style="border: 3px bg-secondary margin: 0;">

    <footer class="text-center py-3" style="background-color: var(--bs-body-bg);">
      <div class="d-flex justify-content-center mb-2">
        <a href="https://instagram.com" class="h2 p-2">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://twitter.com" class="h2 p-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://whatsapp.com" class="h2 p-2">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>
      <div class="footer">
        <p>&copy; Aldi. All Rights Reserved.</p>
      </div>
    </footer>
    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <script>
      (() => {
        'use strict'

        const getStoredTheme = () => localStorage.getItem('theme')
        const setStoredTheme = theme => localStorage.setItem('theme', theme)

        const getPreferredTheme = () => {
          const storedTheme = getStoredTheme()
          if (storedTheme) {
            return storedTheme
          }
          return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = theme => {
          if (theme === 'auto') {
            document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
          } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
          }
        }

        setTheme(getPreferredTheme())

        const showActiveTheme = (theme) => {
          const darkModeButton = document.querySelector('#dark-mode')
          const lightModeButton = document.querySelector('#light-mode')
          
          if (theme === 'dark') {
            darkModeButton.classList.add('active')
            lightModeButton.classList.remove('active')
          } else {
            lightModeButton.classList.add('active')
            darkModeButton.classList.remove('active')
          }
        }

        document.querySelector('#dark-mode').addEventListener('click', () => {
          setStoredTheme('dark')
          setTheme('dark')
          showActiveTheme('dark')
        })

        document.querySelector('#light-mode').addEventListener('click', () => {
          setStoredTheme('light')
          setTheme('light')
          showActiveTheme('light')
        })

        window.addEventListener('DOMContentLoaded', () => {
          showActiveTheme(getPreferredTheme())
        })
      })()
    </script>

    </script>
  </body>
</html>