<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SI-Penduk | Halaman Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ url('adminlte/assets/css/style.css') }}">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">SI-Penduk</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#daftarpenerima">Daftar Penerima Bantuan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="{{ url('/sesi/login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang di Website</h1>
          <h2>Sistem Infromasi Penerima Dana Bantuan Penduduk Dengan Metode SAW</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Lihat Selengkapnya</a>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ url('adminlte/dist/img/donasi.png') }}" class="img-fluid animated" alt="">
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              SI-PENDUK merupakan Sistem informasi penerima dana bantuan penduduk yang berbasis website yang digunakan untuk melihat data penduduk yang nantinya akan mendapatkan bantuan.
              <br>
              Sistem ini menggunakan Metode SAW dalam pengambilan keputusan yang digunakan untuk menyelekasi data penduduk yang berhak mendapatkan bantuan.
              <br>
              Metode Simple Additive Weighting (SAW) adalah salah satu metode yang digunakan dalam proses pengambilan suatu keputusan. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut.
              
            </p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Langkah perhitungan dengan metode SAW adalah sebagai berikut:
              <ul>
                <li><i class="ri-check-double-line"></i> Menentukan Bobot Tiap Kriteria.</li>
                <li><i class="ri-check-double-line"></i> Membentuk Mattrik dari Tabel ALternatif dan Tabel Kriteria</li>
                <li><i class="ri-check-double-line"></i> Merubah Kriteria pada Matrik Menjadi Nilai Berupa Angka</li>
                <li><i class="ri-check-double-line"></i> Menghitung Normalisasi Matrik Diatas </li>
                <li><i class="ri-check-double-line"></i> Lalu Hitung Nilai Akhir Tiap Alternatif</li>
                
                
              </ul>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="daftarpenerima" class="daftarpenerima">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2>Daftar Penerima Bantuan</h2>
        </div>
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Informasi Rekomendasi Penerima Bantuan</h3>
          </div>
          <div class="col-md-12">
              <div class="card">
                  {{-- <div class="card-header">
                      <small class="card-title">Daftar Data Penduduk Penerima Dana Bantuan</small>
                  </div> --}}
                  <!-- /.card-header -->
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-striped" id="example1" style="font-size: 14px;">
                              <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggungan Anak</th>
                                    <th>Penghasilan(jt)</th>
                                    <th>Luas Bangunan(m2)</th>
                                    <th>Kelistrikan Rumah</th>
                                    <th>Jumlah Kendaraan</th>
                                   
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($alternative as $i => $a)
                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $a->nik}}</td>
                                          <td>{{ $a->nama}}</td>
                                          <td>{{ $a->tempat_lahir}}</td>
                                          <td>{{ $a->tanggal_lahir}}</td>
                                          <td>{{ $a->jk}}</td>
                                          <td>{{ $a->agama}}</td>
                                          <td>{{ $a->tanggungan_anak}}</td>
                                          <td>{{ $a->penghasilan}}</td>
                                          <td>{{ $a->luas_bangunan}}</td>
                                          <td>{{ $a->kelistrikan}}</td>
                                          <td>{{ $a->kendaraan}}</td>
                                          
                                          

                                                 
                                    
                                          
                                  
                                      </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                      
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example1" style="font-size: 14px;">
                                <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>Nama</th>
                                      <th>Hasil</th>
                                      {{-- <th>Tempat Lahir</th>
                                      <th>Tanggal Lahir</th>
                                      <th>Jenis Kelamin</th>
                                      <th>Agama</th>
                                      <th>Tanggungan Anak</th>
                                      <th>Penghasilan</th>
                                      <th>Luas Bangunan</th>
                                      <th>Kelistrikan Rumah</th>
                                      <th>Jumlah Kendaraan</th> --}}
                                     
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($rank as $i => $a)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $a["nama"]}}</td>
                                            <td>{{ $a["nilai"]}}</td>
                                        </tr>
                                    @endforeach
  
                                  {{-- @foreach ($alternative as $i => $a)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $a->nik}}</td>
                                            <td>{{ $a->nama}}</td>
                                            <td>{{ $a->tempat_lahir}}</td>
                                            <td>{{ $a->tanggal_lahir}}</td>
                                            <td>{{ $a->jk}}</td>
                                            <td>{{ $a->agama}}</td>
                                            <td>{{ $a->tanggungan_anak}}</td>
                                            <td>{{ $a->penghasilan}}</td>
                                            <td>{{ $a->luas_bangunan}}</td>
                                            <td>{{ $a->kelistrikan}}</td>
                                            <td>{{ $a->kendaraan}}</td>
                                           
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Silahkan hubungi kami untuk informasi lebih lanjut</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Industri Lemahduwur, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>desalemahduwur@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telpon:</h4>
                <p>+628112233</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7161556072842!2d109.13176297347891!3d-6.924494167773686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb91952f1467f%3A0x70ab20e0b112a35f!2sBalai%20Desa%20Lemahduwur!5e0!3m2!1sen!2ssg!4v1683067675117!5m2!1sen!2ssg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{url('/pesan')}}" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Pesan</label>
                  <textarea class="form-control" name="pesan" rows="10" required></textarea>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('adminlte/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('adminlte/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('adminlte/assets/js/main.js') }}"></script>

</body>

</html>