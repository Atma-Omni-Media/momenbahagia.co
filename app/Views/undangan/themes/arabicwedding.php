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
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/css/allplugins.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/css/fontawesome-all.min.css">

		<!-- Style css -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/style.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/css/responsive.css">

        <!-- Customization css -->
        <!--If u need any change then use this css file-->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/css/custom.css">

		<!-- Modernizr JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <audio loop src="<?php echo base_url() ?><?= $musiknya ?>" id="audio" ></audio>
    <body>
      <!-- preloader Start -->
		<div id="preloader">
			<div id="status"><img src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/preloader.gif" id="preloader_image" alt="loader">
			</div>
		</div>

        <!--Header wrapper start here-->
        <header id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-10">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt=""/></a> -->
                            <h1 class="EventTitle"><?php echo $row->nama_panggilan_wanita; ?>&<?php echo $row->nama_panggilan_pria; ?></h1>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9 hidden-xs">
                        <div class="main-menu menu_scroll">
                            <nav>
                                <ul>
                                    <li><a href="0">Home</a></li>
                                    <li><a href="1">About Us</a></li>
                                    <li><a href="2">Events</a></li>
                                    <li><a href="3">Gallery</a></li>
                                    <li><a href="4">Love Story </a></li>
                                    <!-- <li><a href="5">Blog</a></li> -->
                                    <li><a href="6">Contact Us</a></li>
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
                            <li><a href="2">Events</a></li>
                            <li><a href="3">Gallery</a></li>
                            <li><a href="4">Love Story </a></li>
                            <li><a href="5">Blog</a></li>
                            <li><a href="6">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </header>
        <!--Header wrapper end here-->
        <!--About wrapper start here-->
        <section section-scroll='1' class="about-area section sectionbg">
            <div class="container">
                
	            <?php foreach ($mempelai->getResult() as $row){  ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>ARE GETTING MARRIED!</p>
                            <h2><?php echo $row->nama_panggilan_wanita; ?> and <?php echo $row->nama_panggilan_pria; ?></h2>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="about-list">
                            <div class="imgs"><figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/bride.png" alt=""/></figure></div>
                            <div class="content">
                                <h2><?php echo $row->nama_wanita; ?></h2>
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
                    <!-- ============== ACARA =============== -->
                    <?php 
                    
                    foreach ($acara->getResult() as $row){ 
                        $tanggal_akad =  $row->tanggal_akad;
                        $tanggal_resepsi =  $row->tanggal_resepsi;
                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-invitation">
                            <div class="content">
                                <h2 class="wow animated fadeInUp" data-wow-duration="1s">Invitation</h2>
                                <p class="wow animated fadeInUp" data-wow-duration="1.3s">We inviting you and <br>your family on</p>
                                <strong class="wow animated fadeInUp" data-wow-duration="1.6s"><?php echo $row->tanggal_resepsi; ?></strong>
                                <span class="wow animated fadeInUp" data-wow-duration="1.9s"><?php echo $row->tempat_resepsi; ?><br><?php echo $row->alamat_resepsi; ?></span>
                            </div>
                            <div class="btn-rspd mr-t30">
                                <a href="#" class="btn1">Rsvp</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php foreach ($mempelai->getResult() as $row){  ?>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="about-list">
                            <div class="imgs"><figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/groom.png" alt=""/></figure></div>
                            <div class="content">
                                <h2><?php echo $row->nama_pria; ?></h2>
                                <p>( <?php echo "Putra ".$row->nama_ayah_pria . " & " .$row->nama_ibu_pria  ?> )</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!--About wrapper end here-->
        <!--Counter wrapper start here-->
        <section class="counter-area section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="cont-con">
                            <h2>until we<br>get married!</h2>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="counter-lists">
                            <ul>
                                <li class="wow animated fadeInRight" data-wow-duration="1.9s"><div class="cons"><span class="days">00</span><p>Days</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1.6s"><div class="cons"><span class="hours">00</span><p>hours</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1.3s"><div class="cons"><span class="minutes">00</span><p>minutes</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1s"><div class="cons"><span class="seconds">00</span><p>seconds</p></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter wrapper End here-->
        <!--Family wrapper start here-->
        <!--Family wrapper end here-->
        <!--Event wrapper start here-->
        <section section-scroll='2' class="event-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Ceremony & party</p>
                            <h2>THE WEDDING EVENT</h2>
                        </div>
                    </div>
                </div>
                <?php 
	
                foreach ($acara->getResult() as $row){ 
                    $tanggal_akad =  $row->tanggal_akad;
                    $tanggal_resepsi =  $row->tanggal_resepsi;
                ?>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="event-infobox">
                            <h2>Akad Nikah</h2>
                            <h1><?php echo $row->jam_akad; ?></h1>
                            <span><?php echo $row->tempat_akad; ?><br><?php echo $row->alamat_akad; ?></span>
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">Read More...</a></p> -->
                            <div class="clearfix"></div>
                            <a href="#" class="btgbtn"><img src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/images/icons/map.png" alt="Map" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="event-img text-center">
                            <figure><img src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/images/about/3.jpg" alt=""/></figure>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="event-infobox">
                            <h2>Resepsi</h2>
                            <h1><?php echo $row->jam_resepsi; ?></h1>
                            <span><?php echo $row->tempat_resepsi; ?><br><?php echo $row->alamat_resepsi; ?></span>
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">Read More...</a></p> -->
                            <div class="clearfix"></div>
                            <a href="#" class="btgbtn"><img src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/images/icons/map.png" alt="Map" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!--Event wrapper End here-->
        <!--Invitation wrapper start here-->
        <!--Invitation wrapper end here-->
        <!--Testimonial wrapper start here-->
        <section class="testimonial-srea section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testimonial-slider">
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial wrapper end here-->
        <!--Gallery wrapper start here-->
        <section section-scroll='3' class="gallery-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-col-sm-12">
                        <div class="section-heading">
                            <p>Jenny & Mark</p>
                            <h2>memorable photo gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="gallery-slider">
                        <?php  foreach($album as $key => $data) {  ?>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url() ?>/assets/users/<?php echo $key->key_image.'/'.$data['album'] ?>.png"><img src="<?php echo base_url() ?>/assets/users/<?php echo $row->key_image.'/'.$data['album']; ?>.png" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery wrapper End here-->
        <!--Blog wrapper start here-->
        <!-- <section section-scroll='5' class="blog-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Wedding Journal</p>
                            <h2>FROM OUR BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/1.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0 floatright">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/2.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/3.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blog-btn">
                            <a href="#" class="btn1">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Blog wrapper end here-->
        <!--Love story wrapper start here-->
        <section section-scroll='4' class="love-story-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p><?php echo $row->nama_panggilan_pria ?> & <?php echo $row->nama_panggilan_wanita ?></p>
                            <h2>Our true love story</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="love-story">
                            <div class="top-btn text-center mr-b50">
                                <a href="#" class="btn1"></a>
                            </div>
                            <div class="story-list">
                                <div class="col-md-6 col-sm-12 pd-0">
                                    <div class="story lefts">
                                    <?php 
                                        $no=0;
                                        foreach($cerita as $key => $data) { 
                                            $no++;
                                            if($no % 2 == 0){ ?>
                                        <div class="storys">
                                            <figure><img src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/images/story/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span><?php echo $data['tanggal_cerita']; ?></span>
                                                <h3><?php echo $data['judul_cerita']; ?></h3>
                                                <p><?php echo $data['isi_cerita']; ?>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?> 
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Love story wrapper end here-->
        <!--Rspv wrapper start here-->
        <section class="rspv-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>MAPS</p>
                            <h2>Location</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
			
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                    <?= $maps ?>
                                                
                    </div>
                </div>
            </div>
        </section>
        <!--Rspv wrapper end here-->
        <!--Contact wrapper start here-->
        <section section-scroll='6' class="contact-area section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="content">
                                <h2>Home</h2>
                                <p>Jakarta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-phone fa-flip-horizontal"></i></span>
                            </div>
                            <div class="content">
                                <h2>Phone</h2>
                                <p>0878-8700-5722</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="content">
                                <h2>Email Us</h2>
                                <p>halomomenbahagia@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact wrapper end here-->
        <!--Footer wrapper start here-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="foo-logo">
                            <!-- <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""/></a> -->
                            <h1 class="EventTitleFooter"><?php echo $row->nama_panggilan_pria ?> ?>&<?php echo $row->nama_panggilan_wanita ?></h6>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="copyright">
                            <p>@ Copyright 2017 All Rights Reserved. By MomenBahagia.co</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer wrapper end here-->

        
		<!-- All JavaScript Here -->

		<!-- jQuery latest version -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/bootstrap.min.js"></script>
        <!-- Owl.carousel JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/owl.carousel.min.js"></script>
        <!-- Bxslider JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jquery.bxslider.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- meanmenu JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jquery.meanmenu.js"></script>
        <!-- jarallax JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jarallax.min.js"></script>
		<!-- jQuery-ui JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jquery-ui.min.js"></script>
        <!-- counterup JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/jquery.downCount.js"></script>
        <!-- wow JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/wow.min.js"></script>
		<!-- Plugins JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/plugins.js"></script>
		<!-- Init JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/01_arabic_wedding/assets/js/main.js"></script>

    </body>
</html>
