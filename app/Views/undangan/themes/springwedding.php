<!doctype html>
<html class="no-js" lang="en">
    <head>
    <?php foreach ($mempelai->getResult() as $row){ ?>
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
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/css/allplugins.css">
		<!-- Style css -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/style.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/css/responsive.css">

        <!-- Customization css -->
        <!--If u need any change then use this css file-->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/css/custom.css">

		<!-- Modernizr JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/vendor/modernizr-2.8.3.min.js"></script>

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
			<div id="status"><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/preloader.gif" id="preloader_image" alt="loader">
			</div>
		</div>


        <!--Header area start here-->
        <header>
            <div class="bgimg"></div>
            <div class="bgimgt"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="logo-area">
                            <div class="content">
                                <h2><?php echo $row->nama_panggilan_pria ?> & <?php echo $row->nama_panggilan_wanita ?></h2>
                                <p>ARE GETTING MARRIED!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky" class="main-menus hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="menus menu_scroll">
                                <nav>
                                    <ul>
                                        <li><a href="0">Home</a></li>
                                        <li><a href="1">About Us </a></li>
                                        <li><a href="2">Love Story</a></li>
                                        <li><a href="3">Events</a></li>
                                        <li><a href="4">Rsvp</a></li>
                                        <li><a href="5">Family</a></li>
                                        <li><a href="6">Gallery </a></li>
                                        <li><a href="7">Blog</a></li>
                                        <li><a href="8">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!--Responsive Menu area--> 
            <div id="sticky2" class="mobilemenu">
                <div class="mobile-menu menu_scroll visible-xs">
                    <nav>
                        <ul>
                            <li><a href="0">Home</a></li>
                            <li><a href="1">About Us </a></li>
                            <li><a href="2">Love Story</a></li>
                            <li><a href="3">Events</a></li>
                            <li><a href="4">Rsvp</a></li>
                            <li><a href="5">Family</a></li>
                            <li><a href="6">Gallery </a></li>
                            <li><a href="7">Blog</a></li>
                            <li><a href="8">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </header>
        <!--Header area end here-->
        <!--Slider area start here-->
        <section section-scroll='0' class="slider-area bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="slider_home">
                            <div class="slider-list one af">
                                <?php 
                                    foreach ($acara->getResult() as $row){ 
                                        $tanggal_akad =  $row->tanggal_akad;
                                        $tanggal_resepsi =  $row->tanggal_resepsi;
                                    ?>
                                <div class="content">
                                    <h2 class="wow animated fadeInDown" data-wow-duration="1.8s">Save The Date</h2>
                                    <h3 class="wow animated fadeInDown" data-wow-duration="1.5s"><?php echo $row->tanggal_resepsi ?></h3>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Slider area End here-->
        <!--Counter area start here-->
        <section class="counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                        <div class="counter-con">
                            <h2>Please Join Us For Our Wedding Celebration</h2>
                        </div>
                        <div class="counter-list">
                            <ul>
                                <li><div class="count-con"><span class="days">00</span><p>Days</p></div></li>
                                <li><div class="count-con"><span class="hours">00</span><p>hours</p></div></li>
                                <li><div class="count-con"><span class="minutes">00</span><p>minutes</p></div></li>
                                <li><div class="count-con"><span class="seconds">00</span><p>seconds</p></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter area End here-->
        <!--Love story area start here-->
        <section section-scroll='2' class="love-story section">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                        <div class="love-story-con">
                            <h2>Our True Love Story</h2>
                            <p>Jenny and Mark Taylor met in 2009 during senior year of high school, during an Intro to Photography class. Students were assigned a project that required them to shoot architectural buildings throughout San Francisco. One afternoon, they ran into each other on the street - they were photographing the same building, just from different vantage points! - and decided to shoot together. The afternoon turned to evening and ended with ice cream, where they talked until the shop closed. And the rest, as they say, is history.</p>
                            <p>In November, after dinner at Little Star (where they had their first "real" date!), Dallas Taylor surprised Lindsay Walker by proposing in Buena Vista Park, where they often take their dog Luna for walks. They're so excited to start the next phase of their lives together and can't wait to celebrate with you in August!</p>
                            <a href="#" class="btn1">rspv</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Love story area End here-->
        <!--Persons area start here-->
        <section section-scroll='1' class="persons-area bg-img jarallax af section4">
            <div class="container">
            <?php foreach ($mempelai->getResult() as $row){  ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="persons">
                            <figure>
                                <img src="<?php echo base_url() ?>/assets/themes/01_spring_wedding/assets/images/about/1.jpg" alt=""/>
                                <h2>Mempelai Pria</h2>
                            </figure>
                            <div class="content">
                                <h3><?php echo $row->nama_wanita ?></h3>
                                <p>(<?php echo "Putri ".$row->nama_ayah_wanita . " & " .$row->nama_ibu_wanita  ?>)</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="persons">
                            <figure>
                                <img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/bride.png" alt=""/>
                                <h2>Mempelai Pria</h2>
                            </figure>
                            <div class="content">
                                <h3><?php echo $row->nama_pria ?></h3>
                                <p>(<?php echo "Putri ".$row->nama_ayah_pria . " & " .$row->nama_ibu_pria  ?>)</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </section>
        <!--Persons area end here-->
        <!--Event area start here-->
        <section section-scroll='3' class="event-area section">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>Ceremony & Party</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2 pd-0">
                    <?php 
                    
                    foreach ($acara->getResult() as $row){ 
                        $tanggal_akad =  $row->tanggal_akad;
                        $tanggal_resepsi =  $row->tanggal_resepsi;
                    ?>
                        <div class="col-md-6 col-sm-12">
                            <div class="event-list">
                                <div class="time"><?php echo $row->jam_akad; ?></div>
                                <div class="content">
                                    <h2>Main Ceremony</h2>
                                    <h3><?php echo $row->tanggal_akad; ?></h3>
                                    <span><?php echo $row->tempat_akad; ?></span>
                                    <p><?php echo $row->alamat_akad; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="event-list">
                                <div class="time"><?php echo $row->jam_resepsi; ?></div>
                                <div class="content">
                                    <h2>Wedding Party</h2>
                                    <h3><?php echo $row->tanggal_resepsi; ?></h3>
                                    <span><?php echo $row->tempat_resepsi; ?></span>
                                    <p><?php echo $row->alamat_akad; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--Event area End here-->
        <!--Testimonial area start here-->
        <section class="testimonial-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class=" col-md-10 col-sm-12 col-md-offset-1">
                        <div class="quet">
                            <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/icons/1.png" alt=""/>
                        </div>
                        <div class="testimonial-slider">
                            <div class="testimonial">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>~ Akshay H ~</p>
                            </div>
                            <div class="testimonial">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>~ Akshay H ~</p>
                            </div>
                            <div class="testimonial">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>~ Akshay H ~</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial area End here-->
        <!--Family area start here-->
        <section section-scroll='5' class="family-area section">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>Groomsmen & Bridesmaid</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="family-tabbox">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#groom" aria-controls="groom" role="tab" data-toggle="tab">Groom</a></li>
                                <li role="presentation"><a href="#bride" aria-controls="bride" role="tab" data-toggle="tab">Bride</a></li>
                            </ul>
                            <!-- Nav tabs End-->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="groom">
                                    <div class="familyslider">
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="bride">
                                    <div class="familyslider">
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="familyinfo">
                                                <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Clark Wills</h2>
                                                    <p>(Mark’s Fatheacr)</p>
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
        </section>
        <!--Family area end here-->
        <!--Videos area start here-->
        <section class="videos-area section5 bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="section-heading">
                            <h2>Memorable Moments</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                        <div class="videos">
                            <figure><img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/banner/video.jpg" alt=""/><a href="#"><i class="fas fa-play"></i></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Videos area End here-->
        <!--Gallery area start here-->
        <div section-scroll='6' class="gallery-area section">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div id="gallery" class="col-md-12 col-sm-12 col-xs-12 pd-0">
                        <div class="col-md-4 col-sm-12 col-xs-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/4.jpg"><img src="assets/images/gallery/4.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/5.jpg"><img src="assets/images/gallery/5.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/6.jpg"><img src="assets/images/gallery/6.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/7.jpg"><img src="assets/images/gallery/7.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="gallerys">
                                    <figure><a href="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/gallery/8.jpg"><img src="assets/images/gallery/8.jpg" alt=""/><span><i class="fas fa-expand-arrows-alt"></i></span></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="load-btn text-center mr-t30">
                            <a href="#" class="btn1">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Gallery area End here-->
        <!--Rspv area start here-->
        <section section-scroll='4' class="rspv-area section5 bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>Are You Attending?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-md-offset-3">
                        <div class="rspv-form">
                            <h2>Rsvp Here!</h2>
                            <form>
                                <div class="col-sm-12">
                                    <fieldset>
                                        <label>Full Name:</label>
                                        <input type="text" name="full_name" class="require">
                                    </fieldset>
                                </div>
                                <div class="col-sm-12">
                                    <fieldset>
                                        <label>Email:</label>
                                        <input type="email" name="email" class="require" data-valid="email" data-error="Email should be valid.">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <label>Guests:</label>
                                        <select name="guest_no" class="require">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <label>Event:</label>
                                        <select name="event_name" class="require">
                                            <option>All Events</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                        </select>
                                    </fieldset>
                                </div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="response"></div>
							</div>
                                <div class="col-sm-12 text-center">
                                  
									<button type="button" class="submitForm btn1" form-type="inquiry">I am attending</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Rspv area End here-->
        <!--Registry area start here-->
        <!--Registry area end here-->
        <!--Blog area start here-->
        <section section-scroll='7' class="blog-area section">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>From Our Blog</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="blog-slider">
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/1.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/2.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/3.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/1.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/2.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogs">
                                    <figure>
                                        <img src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/images/blog/3.jpg" alt=""/>
                                        <div class="date">
                                            <strong>26</strong>
                                            <span>Jan</span>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h2>Blog Planning Honeymoon Trip</h2>
                                        <ul>
                                            <li><i class="fas fa-eye"></i>240 view</li>
                                            <li><i class="fas fa-heart"></i>143 Like</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut laboe et dolore magna aliqua.</p>
                                        <a href="#" class="btn1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog area End here-->
        <!--Map area start here-->
        <div class="map_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="map-area">
                            <div id="map" class="map-full" style="width:100%; height:640px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Map area End here-->
        <!--Contact info area Start here-->
        <section section-scroll='8' class="contact-info section2">
            <div class="bgimgst"></div>
            <div class="bgimgsb"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="info">
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <div class="content">
                                <h2>Home</h2>
                                <p>110, B Kalani Bagh, Dewas<br> M.P. INDIA #455001</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="info">
                            <span><i class="fas fa-phone"></i></span>
                            <div class="content">
                                <h2>Phone</h2>
                                <p>+ 91 90980 85819<br>+91 98272 55866</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="info">
                            <span><i class="fas fa-envelope"></i></span>
                            <div class="content">
                                <h2>Email</h2>
                                <p>webstrot@gmail.com<br> handge.akshay@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact info area End here-->
        <!--Footer area start here-->
        <footer class="bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="logo-area">
                            <div class="content">
                                <h2>Jenny <span>&</span> Mark</h2>
                                <p>ARE GETTING MARRIED!</p>
                            </div>
                        </div>
                        <div class="contents">
                            <h1>Forever And Always Our Love<br>Thank You!</h1>
                            <p>@ Copyright 2018 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer area end here-->


		<!-- All JavaScript Here -->

		<!-- jQuery latest version -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/bootstrap.min.js"></script>
        <!-- Owl.carousel JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/owl.carousel.min.js"></script>
        <!-- Bxslider JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jquery.bxslider.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- meanmenu JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jquery.meanmenu.js"></script>
        <!-- jarallax JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jarallax.min.js"></script>
		<!-- jQuery-ui JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jquery-ui.min.js"></script>
        <!-- downCount JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/jquery.downCount.js"></script>
        <!-- masonry JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/masonry.pkgd.min.js"></script>
		<!-- wow JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/wow.min.js"></script>
		<!-- Plugins JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/plugins.js"></script>
		<!-- Init JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/04_spring_wedding/assets/js/main.js"></script>


        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <script>

        function initialize() {
          var mapOptions = {
            zoom: 13,
            scrollwheel: false,
            center: new google.maps.LatLng(40.6700, -73.9400),
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ede6dc"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[
              {"color":"#ede6dc"},{"lightness":20}
              ]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#fff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
          };
          var map = new google.maps.Map(document.getElementById('map'),
          mapOptions);
          var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
          });
          }
          google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </body>
</html>
