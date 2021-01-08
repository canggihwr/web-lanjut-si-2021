<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D3 Sistem Informasi</title>

  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  
  <link href="<?php echo base_url('assets/bootstrap/css/style.css');?>" rel="stylesheet">


<body style="background-image: url('<?php echo base_url('assets/img/bg.jpg');?>');">

  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="<?php echo base_url('assets/img/logo.png');?>" alt=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#nama">Nama</a></li>
          <li><a href="#nim">NIM</a></li>
          <li><a href="#semester">Semester</a></li>
          <li><a href="#jurusan">Jurusan</a></li>
          <li><a href="#kampus">Kampus</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang</h1>
      <h2>Canggih Wahyu Rinaldi - 1901050017 | D3 Sistem Informasi | Universitas Bumigora</h2>
      <a href="http://localhost/ci/index.php/welcome/index2" class="btn-get-started">Log Out</a>
    </div>
  </section>



  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Mata Kuliah <strong>Pemrograman Web II</strong> 2020
      </div>
      <div class="credits">
        Dosen pembimbing : Pahrul Irfan, S.Kom,M.Kom
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>