<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMAK MAKASSAR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.png')}}" rel="icon">
  <link href="{{ asset('assets/img/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <img src="assets/img/logo.png">
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#about">Tentang Kami</a></li>
                </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Sistem Manajemen Karyawan</h1>
      <h2>Selamat Datang di Website Resmi</h2>
      <a href="#about" class="btn-get-started scrollto">Jelajahi</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Tentang Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-left">
            <h2>Tentang Kami</h2>
          </div>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.png" style="height: 320px;">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify">
              SIMAK, atau Sistem Manajemen Karyawan, adalah suatu sistem yang dirancang untuk mengelola berbagai aspek yang terkait dengan sumber daya manusia (SDM) dalam suatu organisasi atau perusahaan. Sistem ini bertujuan untuk meningkatkan efisiensi dan efektivitas pengelolaan karyawan melalui penggunaan teknologi informasi dan perangkat lunak khusus.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Tentang Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Kontak</h2>
              <p>Terima kasih telah mengunjungi situs kami. Jika Anda memiliki pertanyaan, saran, atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami siap membantu Anda dengan senang hati.</p>
              
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127201.73524758566!2d119.4851842905801!3d-4.93058537598292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe502b83548b1f%3A0x35317dfedca92c26!2sDISPORA%20KAB.%20PANGKEP!5e0!3m2!1sid!2sid!4v1718092542065!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Bumi Tamalanrea Permai, JL. Keruk Barat XIV, Makassar Sulawesi Selatan</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>muhammaddzulfiqar11@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Nomor Telepon:</h4>
                  <p>08987505441</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Oesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda Terkirim. Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Kontak Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3><img src="assets/img/logo.png" style="height: 70px;">   SIMAK</h3>
            <p>
              Bumi Tamalanrea Permai<br>
              JL. Keruk Barat XIV<br>
              Makassar, Sulawesi Selatan <br><br>
              <strong>Phone:</strong> 08987505441<br>
              <strong>Email:</strong> muhammaddzulfiqar11@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tautan Berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Informasi Pembuat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nama : Muhammad Dzulfiqar Syalfullah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Asal : Makassar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hobi : Mempelajari Hal Baru Terkait Teknologi Informasi</a></li>
            </ul>
          </div>

        

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SIMAK</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">Muhammad Dzulfiqar Syaifullah</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>