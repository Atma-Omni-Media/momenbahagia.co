<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">
  
  <head>
    <title><?= SITE_NAME ?> - Digital Invitation</title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/base/img/favicon.png?<?= date("Y-m-d"); ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan kren">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#EF9020" />
    <meta name="author" content="Trisna Kurniawan">

    <!-- Required CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/bootstrap.min.css?SIDOINIKAHV2" >
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/line-icons.css?SIDOINIKAHV2">
    <link type="text/css" href="<?php echo base_url() ?>/assets/base/css/froala_blocks.css?SIDOINIKAHV2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

  </head>

  <body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
              <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>/assets/base/img/logo.png?cache<?= date("Y-m-d"); ?>" height="35" alt="image">
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarNav3">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#fitur">FITUR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#harga">HARGA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tema">TEMA WEB</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#video">TEMA VIDEO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testi">TESTIMONI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>" style="font-weight:bolder">LOGIN</a>
                  </li>
                </ul>
        
              </div>
            </div>
          </nav>
        </div>
    </header>

      <section class="fdb-block cover d-flex align-items-center" >
        <div class="container align-items-end justify-content-left d-flex">
          <div class="row align-items-top text-left">
            <div class="col-6 col-md-6 col-lg-6">
              <h1 class="judul"><?= SITE_NAME ?></h1>
              <p class="lead subjudul">Buat Undangan Lebih Praktis untuk berbagai kebutuhan momen bahagia kamu</p>
              <p class="mt-4"><a href="<?= base_url() ?>/order" class="btn btn-light btn-pesan">Buat Undangan</a></p>
              <p class="mt-4"><a href="<?= base_url() ?>/tema" class="btn btn-light btn-pesan">Lihat Demo</a></p>
            </div>
            <div class="col-12 col-sm-4 col-md-6 col-lg-4">
              <!-- <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/base/img/home_cover.png?<?= date("Y-m-d"); ?>"> -->
            </div>
          </div>
        </div>
      </section>

      <section class="fdb-block" id="fitur">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h1>Fitur</h1>
            </div>
          </div>
          <div class="row text-left mt-5">
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/gift.svg">
                </div>
                <div class="col-9">
                  <h3><strong>Website Selalu Aktif</strong></h3>
                  <p>Website yang cepat dan aman akan aktif tanpa ada batasan waktu.</p>
                </div>
              </div>
            </div>
      
            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/cloud.svg">
                </div>
                <div class="col-9">
                  <h3><strong>Ubah Tampilan</strong></h3>
                  <p>Desain web dan undangan dapat kamu ubah sesuka hati sesuai keinginan.</p>
                </div>
              </div>
            </div>
      
            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/map-pin.svg">
                </div>
                <div class="col-9">
                  <h3><strong>Do'a dan Ucapan</strong></h3>
                  <p>Para tamu dapat memberikan doa dan ucapan langsung di profile website undanganmu.</p>
                </div>
              </div>
            </div>
          </div>
      
          <div class="row text-left pt-3 pt-sm-4 pt-md-5">
            <div class="col-12 col-md-4">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/layers.svg">
                </div>
                <div class="col-9">
                  <h3><strong>Cerita</strong></h3>
                  <p>Tuangkan cerita perjalanan cinta anda kepada tamu undangan.</p>
                </div>
              </div>
            </div>
      
            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/life-buoy.svg">
                </div>
                <div class="col-9">
                  <h3><strong>Layar Sapa</strong></h3>
                  <p>Setiap tamu yang hadir dapat disapa saat menerima undangan.</p>
                </div>
              </div>
            </div>
      
            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
              <div class="row">
                <div class="col-3">
                  <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/layout.svg">
                </div>
                <div class="col-9">
                  <h3><strong> Kirim Undangan 
                    </strong></h3>
                  <p>Kamu bisa menggunakan WhatsApp untuk mengirimkan undangan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="fdb-block" style="background-image: linear-gradient(to right, #d39e00 0%, #ffa707 100%) !important;" id="harga">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h2 class="text-white">HARGA</h2>
            </div>
          </div>
      
          <div class="row mt-5 align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
              <h2 class="judul">Harga Termurah!</h2>
              <p class="lead subjudul">Dengan harga terjangkau anda sudah mendapatkan halaman website, manajemen tamu, cerita, komentar, peta lokasi, dan buku tamu digital!.</p>
            </div>
      
            <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
              <div class="fdb-box px-4 pt-5">
                <h2>Premium</h2>
                <p class="lead">Harga spesial selama masa pandemi.</p>
      
                <p class="h1 mt-5 mb-5">Rp 100.000</p>
      
                <p><a href="<?= base_url() ?>/tema" class="btn btn-primary">Pesan Sekarang</a></p>
              </div>
            </div>
      
          </div>
        </div>
      </section>

      <section class="fdb-block team-1" id="tema">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-12">
              <h2>Tema Website</h2>
              <p class="lead">Tersedia banyak pilihan tema undangan web yang menarik untuk pernikahanmu..</p>
            </div>
          </div>
    
          <div class="row">
            <?php 
            $i = 1;
            foreach ($tema->getResult() as $row){ ?>
              <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                <div class="fdb-box p-0">
                  <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png">
        
                  <div class="content p-2 d-flex justify-content-center">
                    <h3><strong><?= $row->nama_theme ?></strong></h3>
                  </div>

                  <div class="d-flex justify-content-center">
                    <p class="mt-2 mr-2"><a href="<?= base_url('order/'.$row->kode_theme) ?>" class="btn btn-success btn-sm">Pesan</a></p>  
                    <p class="mt-2"><a href="<?= base_url('demo/'.$row->nama_theme) ?>" class="btn btn-primary btn-sm">Demo</a></p>
                  </div>
                </div>
              </div>
            <?php 
            if ($i++ == 4) break;
            } 
            ?>
          </div>

          <div class="d-flex justify-content-center">
            <p class="mt-4"><a href="<?= base_url() ?>/tema" class="btn btn-primary">Lihat Semua</a></p>
          </div>

        </div>
      </section>

      <section class="fdb-block team-1" id="video">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-12">
              <h2>Tema Video</h2>
              <p class="lead">Tersedia banyak pilihan tema undangan video yang menarik untuk pernikahanmu..</p>
            </div>
          </div>
          
          <div class="row">
            <?php 
            $i = 1;
            foreach ($tema_video->getResult() as $row){ ?>
              <div class="col-lg-3 col-md-6 col-xs-12 mt-5 text-center">
                <div class="fdb-box p-0">
                  <!-- <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png"> -->
                  <video width="200" height="280" controls poster="<?php echo base_url() ?>/assets/themes/videos/images/<?= $row->nama_theme ?>.png">
                        <source src="<?php echo base_url() ?>/assets/themes/videos/<?= $row->nama_theme ?>.mp4" type="video/mp4">
                  </video>
                  <div class="content p-2 d-flex justify-content-center">
                    <h3><strong><?= $row->nama_theme ?></strong></h3>
                  </div>

                  <div class="d-flex justify-content-center">
                    <p class="mt-2 mr-2"><a href="<?= base_url('order/'.$row->kode_theme) ?>" class="btn btn-success btn-sm">Pesan</a></p>  
                    <p class="mt-2"><a href="<?= base_url('demo/'.$row->nama_theme) ?>" class="btn btn-primary btn-sm">Demo</a></p>
                  </div>
                </div>
              </div>
            <?php 
            if ($i++ == 4) break;
            } 
            ?>
          </div>

          <!-- <div class="d-flex justify-content-center">
            <p class="mt-4"><a href="<?= base_url() ?>/tema" class="btn btn-primary">Lihat Semua</a></p>
          </div> -->

        </div>
      </section>

      <section class="fdb-block" id="testi">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
              <h2>Testimonials</h2>
              <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
            </div>
          </div>
      
          <div class="row mt-5 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-4">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/1.jpg">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>LakonLab</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Even the all-powerful Pointing has no control about the blind texts it is an small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar."
                    </p>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/3.jpg">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>LakonLab</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Far far away, behind the word mountains, far from the countries Vokalia. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."
                    </p>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
              <div class="fdb-box">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/2.jpg">
                  </div>
                  <div class="col-8 ml-auto">
                    <p>
                      <strong>LakonLab</strong><br>
                      <em>Co-founder at Company</em>
                    </p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <p class="lead">
                      "Separated they live in Bookmarksgrove right at the coast of the Semantics, the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="fdb-block footer-small footer">
        <div class="container">
        <div class="col-12 text-lg-left">
            <p class="lead footer-social">
              <!-- <a href="https://twitter.com/momenbahagia" class="mx-2"><i class="lni-twitter-filled" aria-hidden="true"></i></a> -->
              <a href="https://www.facebook.com/momenbahagia" class="mx-2"><i class="lni-facebook-filled" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/momenbahagia/" class="mx-2"><i class="lni-instagram-filled" aria-hidden="true"></i></a>
            </p>
          </div>
            <div class="row text-center">
            <div class="col">
                <p class="text-footer" style="color:#fff;">&#169;2022 <a href="<?php echo base_url() ?>" rel="dofollow" target="_blank"><?= SITE_NAME ?></a> - <a href="https://lakonlab" rel="dofollow" target="_blank">LakonLab</a> - <a href="https://lakonlab.com" rel="dofollow" target="_blank">AtmaOmniMedia</a>.</p>
            </div>
            </div>
        </div>
    </footer>
    <style>
@import url(https://fonts.googleapis.com/css?family=Roboto);.whatsapp{font-family:Roboto,Arial,Sans-serif;font-size:14px;font-weight:400;right:5%;position:fixed;bottom:0;z-index: 999;}a{color:#fff;text-decoration:none;transition:ease-in-out .2s}a:hover{box-shadow:0 1px 4px rgba(0,0,0,.12),0 1px 3px rgba(0,0,0,.24);color:#fff}.icons{background:#25d366;border-radius:10px 10px 0 0;display:block;height:42px;margin-bottom:20px;width:220px}.icons:hover{background:#128c7e}.icons span{display:block;left:5px;top:5px;transform:translate(0,10px)}svg{border-radius:10px;display:block;fill:#fff;float:left;height:42px;margin-right:5px;-webkit-transition:ease-in-out .175s;transition:ease-in-out .175s;width:42px}
</style>
 <div class="whatsapp">       
        <a class="icons" target="_blank" href="https://api.whatsapp.com/send?phone=087887005722&text=Caption"><svg viewBox="0 0 800 800"><path d="M519 454c4 2 7 10-1 31-6 16-33 29-49 29-96 0-189-113-189-167 0-26 9-39 18-48 8-9 14-10 18-10h12c4 0 9 0 13 10l19 44c5 11-9 25-15 31-3 3-6 7-2 13 25 39 41 51 81 71 6 3 10 1 13-2l19-24c5-6 9-4 13-2zM401 200c-110 0-199 90-199 199 0 68 35 113 35 113l-20 74 76-20s42 32 108 32c110 0 199-89 199-199 0-111-89-199-199-199zm0-40c133 0 239 108 239 239 0 132-108 239-239 239-67 0-114-29-114-29l-127 33 34-124s-32-49-32-119c0-131 108-239 239-239z"/></svg><span>Order Via WhatsApp</span></a>         
<div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/jquery-min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/bootstrap.min.js"></script>
  </body>
</html>