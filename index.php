<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KTTA Adhirayakta</title>
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <!-- =======================================================
  * Template Name: SoftLand - v4.5.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">KTTA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index">Home</a></li>
          <li><a href="info">Info KTTA</a></li>
          <li class="dropdown"><a href="#"><span>Pendataan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pendataan 1</a></li>
              <!--<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
              <li><a href="#">Pendataan 2</a></li>
              <li><a href="#">Pendataan 3</a></li>
              <li><a href="#">Pendataan 4</a></li>
            </ul>
          </li>
          <li><a href="deadline">Deadline</a></li>
          <li><a href="#">Bebas Akses</a></li>
          <li><a href="riset">Surat Riset</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="text-center text-lg-start">
                <p data-aos="fade-right" data-aos-delay="100">Selamat Datang di,</p>
              <h1 data-aos="fade-right">Karya Tulis Tugas Akhir</h1>
              <h1 data-aos="fade-right">Headquarter</h1>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="https://adhirayakta.com/" class="btn btn-outline-white">Web Adhirayakta</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
  <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">0</span>
            <p>Adhirayakta yang Sudah Mengisi Data</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">1329</span>
            <p>Adhirayakta yang Belum Mengisi Data</p>
          </div>
          
          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">1329</span>
            <p>Total Adhirayakta</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


  <main id="main">
    <section id="team" class="team">
     <div class="team-grid">
     <div class="container">
         <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">PIC Matkul</h2>
          </div>
        </div>
         <div class="row people d-flex justify-content-center">
            <!-- data diri PIC -->
            <?php 
            $daftar_pic = [
              [
                'nama' => 'Reyhan Fauzan Adzima',
                'matkul' => 'Akuntansi Pemerintah',
                'ig' => 'http://instagram.com/reyhnnfa',
                'wa' => 'https://wa.me/6281567848757',
              ],
              [
                'nama' => 'Rizki Noor Aini',
                'matkul' => 'Akuntansi Keuangan',
                'ig' => 'http://instagram.com/rzkina',
                'wa' => 'https://wa.me/6285727333181',
              ],
              [
                'nama' => 'Nisa Anggun Spica',
                'matkul' => 'Perpajakan',
                'ig' => 'http://instagram.com/nisaangunns',
                'wa' => 'https://wa.me/681297862831',
              ],
              [
                'nama' => 'Ni Putu Riska Valentini',
                'matkul' => 'Akuntansi Keuangan',
                'ig' => 'http://instagram.com/riskavalentini',
                'wa' => 'https://wa.me/6285737760935',
              ],
              [
                'nama' => 'Dewi Rizky Kusumonegoro',
                'matkul' => 'Audit',
                'ig' => 'http://instagram.com/dewirizkyk',
                'wa' => 'https://wa.me/6289687559690',
              ],
              [
                'nama' => 'Luluk Fatikhatun Nofika',
                'matkul' => 'Perpajakan',
                'ig' => 'http://instagram.com/fffiiikaaa',
                'wa' => 'https://wa.me/6285706552502',
              ],
              [
                'nama' => 'Jodi Baihaqi Gumelar',
                'matkul' => 'Akuntansi Keuangan',
                'ig' => 'http://instagram.com/jbgumelar',
                'wa' => 'https://wa.me/6282123723805',
              ],
              [
                'nama' => 'Steven Ferico',
                'matkul' => 'Akuntansi Biaya',
                'ig' => 'http://instagram.com/stevenferico',
                'wa' => 'https://wa.me/6282261653775',
              ],
              [
                'nama' => 'Syifa Alfia Rahmi',
                'matkul' => 'Sistem Informasi Akuntansi',
                'ig' => 'http://instagram.com/syifaalfia',
                'wa' => 'https://wa.me/6288747219684',
              ],
              [
                'nama' => 'Fajar Kurniawan',
                'matkul' => 'Sistem Informasi Akuntansi',
                'ig' => 'http://instagram.com/fajarfn_',
                'wa' => 'https://wa.me/62895399887189',
              ],
              [
                'nama' => '???',
                'matkul' => 'Audit',
                'ig' => '#',
                'wa' => '#',
              ],
              [
                'nama' => '???',
                'matkul' => '???',
                'ig' => '#',
                'wa' => '#',
              ],
            ];
            ?>

            <!-- dipecah satu2 -->
            <?php foreach($daftar_pic as $pic) : ?>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(https://i.imgur.com/HjKTNkG.jpg)">
                     <div class="cover">
                         <h3 class="name"><?= $pic['nama'] ?></h3>
                         <p class="title"><?= $pic['matkul'] ?></p>
                         <div class="social"><a href="<?= $pic['ig'] ?>" target="_blank"><i class="fab fa-instagram"></i></a><a href="<?= $pic['wa'] ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
                     </div>
                 </div>
             </div>
             <?php endforeach; ?>
         </div>
     </div>
 </div>
    </section>

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></br>
            Edited by <a href="https://instagram.com/adhirayakta.com/">Team KTTA</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>