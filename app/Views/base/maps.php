<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">
  <head>
    <title>Maps - <?= SITE_NAME ?></title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/base/img/favicon.png?<?= date("Y-m-d"); ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan kren">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#6c5ce7" />
    <meta name="author" content="LakonLab">

    <!-- Required CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/bootstrap.min.css?SIDOINIKAHV2" >
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/line-icons.css?SIDOINIKAHV2">
    <link type="text/css" href="<?php echo base_url() ?>/assets/base/css/froala_blocks.css?SIDOINIKAHV2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/pikaday.css?SIDOINIKAHV2">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/croppie.min.css?SIDOINIKAHV2">

  </head>

  <body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
              <a class="navbar-brand navbar-order" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>/assets/base/img/logo.png?cache<?= date("Y-m-d"); ?>" height="35" alt="image">
              </a>
            </div>
          </nav>
        </div>
    </header>

    <div class="konten" style="display: flex;flex-grow: 1;overflow-x: hidden;flex-direction: row;margin-top: 60px;margin-bottom: 40px;">
        <section class="fdb-block" style="padding-top: 20px;flex:1; ">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-8 col-lg-8 col-xl-6">

                <div class="row">
                  <div class="col text-center">
                    <h1 style="color: #005CAA;margin-bottom:0px;">Tutorial!</h1>
                    <p tyle="font-size: 15px;font-weight:500; ">Cara menambahkan MAPS ke undangan </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col text-left">
                    <p tyle="font-size: 15px;font-weight:500; ">1. Buka www.google.com/maps tentukan dan cari lokasi pernikahan kamu</p>
                    <p tyle="font-size: 15px;font-weight:500; ">2. Jika sudah kira-kira tampilannya seperti gambar di bawah ini, kemudian tekan tombol <strong>Share</strong></p>
                    <img src="<?= base_url() ?>/assets/base/img/tutorial/maps1.png" width="100%">
                    <p tyle="font-size: 15px;font-weight:500; ">3. Akan muncul tampilan seperti gambar di bawah ini, pilih <strong>Embed Maps</strong></p>
                    <img src="<?= base_url() ?>/assets/base/img/tutorial/maps2.png" width="100%">
                    <p tyle="font-size: 15px;font-weight:500; ">4. Lalu akan tampil seperti gambar di bawah ini dan klik <strong>Copy HTML</strong> </p>
                    <img src="<?= base_url() ?>/assets/base/img/tutorial/maps3.png" width="100%">
                    <p tyle="font-size: 15px;font-weight:500; ">5. Terakhir tinggal kamu masukkan linknya ke dalam form yang sudah disediakan kemudian simpan</p>
                    <img src="<?= base_url() ?>/assets/base/img/tutorial/maps4.png" width="100%">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
    </div>

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
                <p class="text-footer" style="color:#fff;">&#169;2021 <a href="<?php echo base_url() ?>" rel="dofollow" target="_blank"><?= SITE_NAME ?></a> - <a href="" rel="dofollow" target="_blank">LakonLab</a> - <a href="https://401xd.com" rel="dofollow" target="_blank">AtmaOmniMedia</a>.</p>
            </div>
            </div>
        </div>
    </footer>

      
    <script src="<?php echo base_url() ?>/assets/base/js/jquery-min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/jquery.nav.js"></script>    
    <script src="<?php echo base_url() ?>/assets/base/js/jquery.easing.min.js"></script>     
    <script src="<?php echo base_url() ?>/assets/base/js/main.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/moment-with-locales.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/pikaday.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/dropzone.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/croppie.min.js"></script>
  </body>
</html>