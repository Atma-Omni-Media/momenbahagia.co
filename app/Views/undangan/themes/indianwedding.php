<!doctype html>

<html class="no-js" lang="en">

    <head>
    <?php foreach ($mempelai->getResult() as $row){ 
         $kunci = $row->kunci;
         $youtube = $row->video;
         $salam_pembuka = $row->salam_pembuka;
         $musiknya = "/assets/users/".$kunci."/musik.mp3";
         $maps = $row->maps;    
    ?>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Theme Title-->
        <title><?php echo $row->nama_panggilan_pria." & ".$row->nama_panggilan_wanita; ?></title>
        <meta name="description" content="<?php
        echo 'Hello ' . $invite . '! Kamu Di Undang..';
        ?>">
        <meta property="og:title" content="<?php echo $row->nama_panggilan_pria." & ".$row->nama_panggilan_wanita; ?>">
        <meta property="og:description" content="<?php
        echo 'Hello ' . $invite . '! Kamu Di Undang..';
        ?>">
        <meta property="og:url" content="<?php echo base_url() ?>">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:type" content="website" />
        <?php }?>
            <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
        <link rel="apple-touch-icon" href="favicon.png">
		<!-- All css Here -->
        <!-- All plugins css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/css/allplugins.css">
		<!-- Style css -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/style.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/css/responsive.css">
        <!-- Customization css -->
        <!--If u need any change then use this css file-->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/css/custom.css">
		<!-- Modernizr JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>

       <!-- preloader Start -->
		<div id="preloader">
			<div id="status"><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/preloader.gif" id="preloader_image" alt="loader">
			</div>
		</div>
        <!--Slider area start here-->
        <!-- <section section-scroll='0' class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="sliders">
                            <div class="slider-list slid_one">
                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                              <div class="content">
                                                    <div class="date wow animated fadeInDown" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
                                                    </div>
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Harun <span>&</span> Manshi</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">ARE GETTING MARRIED!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-list slid_two">
                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="content">
                                                    <div class="date wow animated fadeInDown" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
                                                    </div>
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Harun <span>&</span> Manshi</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">ARE GETTING MARRIED!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-list slid_three">
                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="content">
                                                    <div class="date wow animated fadeInDown" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
                                                    </div>
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Harun <span>&</span> Manshi</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">ARE GETTING MARRIED!</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->

        <!--Slider area End here-->

        <!--Header area start here-->

        <header id="sticky">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-8">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt=""/></a> -->
                            <h2 class="EventTitle"><em><?php echo $row->nama_panggilan_wanita ?> & <?php echo $row->nama_panggilan_pria ?></em></h2>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 hidden-xs">
                        <div class="main-menus menu_scroll">
                            <nav>
                                <ul>
                                    <li><a href="0">Home</a></li>
                                    <li><a href="1">About Us</a></li>
                                    <li><a href="2">Love Story</a></li>
                                    <li><a href="3">Events</a></li>
                                    <li><a href="4">Family</a></li>
                                    <li><a href="5">Gallery</a></li>
                                    <!-- <li><a href="6">Blog</a></li> -->
                                    <li><a href="7">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

			<!--Responsive Menu area--> 
            <div class="mobilemenu">
                <div class="mobile-menu menu_scroll visible-xs">
                    <nav>
                        <ul>
                            <li><a href="0">Home</a></li>
                            <li><a href="1">About Us</a></li>
                            <li><a href="2">Love Story</a></li>
                            <li><a href="3">Events</a></li>
                            <li><a href="4">Family</a></li>
                            <li><a href="5">Gallery</a></li>
                            <!-- <li><a href="6">Blog</a></li> -->
                            <li><a href="7">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </header>
        <!--Header area end here-->
        <!--About area start here-->
        <section  section-scroll='1' class="about_area section section-bg">
            <div class="container">
                <div class="row">
                <?php foreach ($mempelai->getResult() as $row){  ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="persons">
                            <figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/groom.png" alt=""/></figure>
                            <div class="content">
                                <h2><span><?php echo $row->nama_wanita; ?></span></h2>
                                <p>( <?php echo "Putri ".$row->nama_ayah_wanita . " & " .$row->nama_ibu_wanita  ?> )</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php 
                    
                    foreach ($acara->getResult() as $row){ 
                        $tanggal_akad =  $row->tanggal_akad;
                        $tanggal_resepsi =  $row->tanggal_resepsi;
                    ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="about-con">
                            <h2>Invitation</h2>
                            <p>We inviting you and<br>your family on</p>
                            <h3><?php echo $row->tanggal_resepsi; ?></h3>
                            <p><?php echo $row->tempat_resepsi; ?>,<br><?php echo $row->alamat_resepsi; ?></p>
                        </div>
                        <div class="con-img mr-t60">
                            <figure><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/about/sm-1.jpg" alt=""/></figure>
                        </div>
                    </div>
                    <?php } ?>
                    <?php foreach ($mempelai->getResult() as $row){  ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="persons">
                        <figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/bride.png" alt=""/></figure>
                            <div class="content">
                                <h2><span><?php echo $row->nama_pria; ?></span></h2>
                                <p>( <?php echo "Putri ".$row->nama_ayah_pria . " & " .$row->nama_ibu_pria  ?> )</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!--About area End here-->

        <!--Counter area start here-->
        <section class="counter-area section bg-img jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="counter-con">
                            <p>We Are Waiting For...</p>
                            <h2><span>The</span> Adventure</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="counter">
                            <ul>
                                <li><span class="days">00</span><p>Days</p></li>
                                <li><span class="hours">00</span><p>hours</p></li>
                                <li><span class="minutes">00</span><p>minutes</p></li>
                                <li><span class="seconds">00</span><p>seconds</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter area End here-->
        <!--Event area start here-->
        <section section-scroll='3' class="event-area section section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>The Wedding Event</h2>
                        </div>
                    </div>
                </div>
                <?php 
	
                    foreach ($acara->getResult() as $row){ 
                    $tanggal_akad =  $row->tanggal_akad;
                    $tanggal_resepsi =  $row->tanggal_resepsi;
                    ?>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="events">
                            <h2><span>Akad</span>Nikah</h2>
                            <button><?php echo $row->jam_akad ?></button>
                            <h4><?php echo $row->tempat_akad ?></h4>
                            <p><?php echo $row->alamat_akad ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="event-img text-center">
                            <figure>
                                <img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/banner/1.jpg" alt=""/>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="events">
                        <h2><span>Akad</span>Nikah</h2>
                            <button><?php echo $row->jam_resepsi ?></button>
                            <h4><?php echo $row->tempat_resepsi ?></h4>
                            <p><?php echo $row->alamat_resepsi ?></p>
                        </div>

                    </div>

                </div>
                <?php } ?>
            </div>

        </section>

        <!--Event area End here-->

        <!--Gallery area start here-->

        <section section-scroll='5' class="gallery-area section2 bg-img jarallax af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>Pre-wedding Photoshoot</h2>

                        </div>

                    </div>

                </div>

                <div class="row" id="gallery">
                    <div class="col-md-3 col-sm-12 col-xs-12 pd-0">
                        
                        <div class="col-md-12 col-sm-6 col-xs-12">
                        <?php  foreach($album as $key => $data) {  ?>
                            <div class="gallery">

                                <figure>

                                    <a href="<?php echo base_url() ?>/assets/users/<?php echo $key->key_image.'/'.$data['album'] ?>.png"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url() ?>/assets/users/<?php echo $key->key_image.'/'.$data['album'] ?>.png" alt=""/></a>

                                </figure>

                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!--Gallery area end here-->

        <!--Registry area start here-->
        <!--Registry area end here-->

        <!--Banner area start here-->

        <section class="banner-area section bg-img af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="banner-con">

                            <h2>We are going to...<span><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/banner/ico.png" alt=""/></span> Celebrate Our Love</h2>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Banner area end here-->

        <!--Love story area start here-->

        <section section-scroll='2' class="love-story section section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>Our Love Story</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="love-story">

                            <div class="story-list">

                                <div class="col-sm-6 pd-0">
                                    
                                <?php 
                                        $no=0;
                                        foreach($cerita as $key => $data) { 
                                            $no++;
                                            if($no % 2 == 0){ ?>
                                    <div class="story lefts">

                                        <div class="storys">

                                            <figure><span><?php echo $data['tanggal_cerita']; ?></span><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/story/1.jpg" alt=""/></figure>

                                            <div class="content">

                                                <h3><?php echo $data['judul_cerita']; ?></h3>

                                                <p><?php echo $data['isi_cerita']; ?></p>

                                            </div>

                                        </div>

                                    </div>
                                    <?php }} ?>

                                </div>
                            </div>

                            <div class="clear"></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Love story area End here-->

        <!--Family wrapper start here-->

        
        <!--Family wrapper end here-->

        <!--Blog wrapper start here-->

        
        <!--Blog wrapper end here-->

        <!--Rspv area start here-->

        <section class="rspv-area bg-img jarallax af section4">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-12 col-md-offset-2">

                        <div class="rspv-form">

                            <div class="heading">

                                <p>Rsvp Here!</p>

                                <h2><span>Are You</span> Attending?</h2>

                            </div>

                            <form>

                                <div class="col-sm-6 col-xs-12">

                                    <fieldset>

                                        <label>Full Name :</label>

                                        <input type="text" name="full_name"  class="require">

                                    </fieldset>

                                    <fieldset>

                                        <label>Guests :</label>

                                        <select name="guest_no" class="require">

                                            <option>01</option>

                                            <option>02</option>

                                            <option>03</option>

                                            <option>04</option>

                                        </select>

                                    </fieldset>

                                </div>

                                <div class="col-sm-6 col-xs-12">

                                    <fieldset>

                                        <label>Email :</label>

                                        <input type="email" name="email" class="require" data-valid="email" data-error="Email should be valid.">

                                    </fieldset>

                                    <fieldset>

                                        <label>Guests :</label>

                                        <select name="guest_no" class="require">

                                            <option>01</option>

                                            <option>02</option>

                                            <option>03</option>

                                            <option>04</option>

                                        </select>

                                    </fieldset>

                                </div>

                                <div class="col-sm-12 col-xs-12">

                                    <fieldset>

                                        <label>Message :</label>

                                        <textarea name="message" class="require"></textarea>

                                    </fieldset>

                                </div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

								<div class="response"></div>

							</div>

                              

								<button type="button" class="submitForm btn1" form-type="inquiry">I am attending</button>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10 col-sm-12 col-md-offset-1 pd-0">

                        <div class="testimonial-slider">

                            <div class="col-sm-12">

                                <div class="content">

                                    <h2>“ Better to have loved and lost, than to have never loved ”</h2>

                                    <p>~ Akshay Handge ~</p>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="content">

                                    <h2>“ Better to have loved and lost, than to have never loved ”</h2>

                                    <p>~ Akshay Handge ~</p>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="content">

                                    <h2>“ Better to have loved and lost, than to have never loved ”</h2>

                                    <p>~ Akshay Handge ~</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Rspv area End here-->

        <!--Contact area start here-->

        <section section-scroll='7' class="contact-area section section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-7 col-sm-6">

                        <div id="map_wrapper">

                        <?= $maps ?>
                        </div>

                    </div>

                    <div class="col-md-5 col-sm-6">

                        <div class="contact-info">

                            <div class="info-list">

                                <div class="info-ico"><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/icons/2.png" alt=""/></div>

                                <div class="info-content">

                                <h2>Home</h2>
                                <p>Jakarta</p>
                           
                                </div>

                            </div>

                            <div class="info-list">

                                <div class="info-ico"><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/icons/3.png" alt=""/></div>

                                <div class="info-content">
                                <h2>Email Us</h2>
                                <p>halomomenbahagia@gmail.com</p>

                                </div>

                            </div>

                            <div class="info-list">

                                <div class="info-ico"><img src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/images/icons/4.png" alt=""/></div>

                                <div class="info-content">

                                <h2>Phone</h2>
                                <p>0878-8700-5722</p>
                            
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Contact area end here-->

        <!--Footer area start here-->

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="arroe-button">

                            <a href="#"><i class="fas fa-angle-up"></i></a>

                        </div>

                        <div class="copyright">

                        <p>@ Copyright 2017 All Rights Reserved. By MomenBahagia.co</p>

                        </div>

                    </div>

                </div>

            </div>

        </footer>

        <!--Footer area End here-->

        <!-- All JavaScript Here -->



        <!-- jQuery latest version -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/vendor/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/bootstrap.min.js"></script>

        <!-- Owl.carousel JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/owl.carousel.min.js"></script>

        <!-- Bxslider JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jquery.bxslider.min.js"></script>

        <!-- Magnific Popup JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jquery.magnific-popup.min.js"></script>

        <!-- meanmenu JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jquery.meanmenu.js"></script>

        <!-- jarallax JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jarallax.min.js"></script>

        <!-- jQuery-ui JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jquery-ui.min.js"></script>

        <!-- Progressbar Animation JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/jquery.downCount.js"></script>

        <!-- masonry JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/masonry.pkgd.min.js"></script>

        <!-- wow JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/wow.min.js"></script>

        <!-- Plugins JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/plugins.js"></script>

        <!-- Init JavaScript -->

        <script src="<?php echo base_url() ?>/assets/themes/03_indian_wedding/assets/js/main.js"></script>



        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <script>



        function initialize() {

                var map;

                var bounds = new google.maps.LatLngBounds();

                var mapOptions = {

                    mapTypeId: 'roadmap',

                    styles: [

                                {"featureType":"water","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":17}]},

                                {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#e1e1e1"},{"lightness":20}]},

                                {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fff"},{"lightness":17}]},

                              {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#fff"},{"lightness":29},{"weight":0.2}]},

                              {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fff"},{"lightness":18}]},

                              {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},

                              {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d6e9b9"},{"lightness":21}]},

                              {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d6e9b9"},{"lightness":21}]},

                              {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#d6e9b9"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#d6e9b9"},{"lightness":17},{"weight":1.2}]}]

                };

                                

                // Display a map on the page

                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

                map.setTilt(20);

                    

                // Multiple Markers

                var markers = [

                    ['West Bengal, India', 22.519984, 87.777172],

                ];

                                    

                // Info Window Content

                var infoWindowContent = [

                    ['<div class="info_content">' +

                    '<h4>Hotel Name</h4>' +

                     '</div>']

                

                ];

                    

                // Display multiple markers on a map

                var infoWindow = new google.maps.InfoWindow(), marker, i;

                

                var map = new google.maps.Map(document.getElementById('map_canvas'),

                mapOptions);

                var image = 'assets/images/icons/map-marker.png';

                // Loop through our array of markers & place each one on the map  

                for( i = 0; i < markers.length; i++ ) {

                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);

                    bounds.extend(position);

                    marker = new google.maps.Marker({

                        position: position,

                        map: map,

                        icon: image,

                        title: markers[i][0]

                    });

                    

                    // Allow each marker to have an info window    

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {

                        return function() {

                            infoWindow.setContent(infoWindowContent[i][0]);

                            infoWindow.open(map, marker);

                        }

                    })(marker, i));



                    // Automatically center the map fitting all markers on the screen

                    map.fitBounds(bounds);

                }



                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)

                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {

                    this.setZoom(30);

                    google.maps.event.removeListener(boundsListener);

                });

          }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </body>

</html>

