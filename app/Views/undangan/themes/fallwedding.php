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
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/css/allplugins.css">
		<!-- Style css -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/style.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/css/responsive.css">
        <!-- Customization css -->
        <!--If u need any change then use this css file-->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/css/custom.css">
		<!-- Modernizr JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
			<div id="status"><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/preloader.gif" id="preloader_image" alt="loader">
			</div>
		</div>
        <!--Header area start here-->
        <header id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-menus">
                            <div class="col-md-3 col-sm-3 col-xs-12 pd-0">
                                <div class="logo">
                                  <a href="index.html"><h1><?php echo $row->nama_panggilan_pria." & ".$row->nama_panggilan_wanita; ?></h1></a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 pd-0 hidden-xs">
                                <div class="menus menu_scroll">
                                    <nav>
                                        <ul>
                                            <li><a href="0">Home</a></li>
                                            <li><a href="1">About Us</a></li>
                                            <li><a href="2">Love Story</a></li>
                                            <li><a href="3">Events</a></li>
                                            <li><a href="4">Gallery</a></li>
                                            <li><a href="5">Blog</a></li>
                                            <li><a href="6">Contact Us</a></li>
                                            <li><a href="7">Rsvp</a></li>
                                        </ul>
                                    </nav>
                                </div>
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
                                <li><a href="4">Gallery</a></li>
                                <!-- <li><a href="5">Blog</a></li> -->
                                <li><a href="6">Contact Us</a></li>
                                <li><a href="7">Rsvp</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--Responsive Menu area End-->
            </div>
        </header>
        <!--Header area end here-->
        <!--Slider araea start here-->
        <!-- <section section-scroll='0' class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="sliders">
                            <div class="slider-list">
                                <div class="slider-img">
                                 <figure><img src="assets/images/sliders/1.jpg" alt=""/></figure>
                                </div>
                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                         <div class="col-md-12 col-sm-12">
                                                <div class="content">
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Jhon & Alisa</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                    <br>
                                                   <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-list slid_two">
                                <div class="slider-img">
                                    <figure><img src="assets/images/sliders/2.jpg" alt=""/></figure>
                                </div>
                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="content">
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Jhon & Alisa</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                    <br>
                                                    <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-list slid_three">
                                <div class="slider-img">
                                    <figure><img src="assets/images/sliders/3.jpg" alt=""/></figure>
                                </div>

                                <div class="slider-con">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="content">
                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">Jhon & Alisa</h2>
                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                    <br>
                                                    <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">27/12/2017</em>
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
            </div>
        </section> -->

        <!--Slider araea End here-->

        <!--About area start here-->

        <section section-scroll='1' class="about_area_2 section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2><?php echo $row->nama_panggilan_wanita." & ".$row->nama_panggilan_pria; ?></h2>
                            <p>Are Getting Merrid</p>
                            <div class="date">
                                <span>Save the Date</span>
                                <em>27/12/2017</em>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="row">
                    <?php foreach ($mempelai->getResult() as $row){  ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="person">
                            <figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/grom.png" alt=""/></figure>
                            <div class="content">
                                <h2><?php echo $row->nama_wanita; ?></h2>
                                <div class="con">
                                    <ul>

                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <div class="text-con">
                                        <span><?php echo "Putri ".$row->nama_ayah_wanita . " & " .$row->nama_ibu_wanita  ?></span>
                                    </div>
                                </div>
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
                            <h1>Invitation</h1>
                            <div class="con">
                                <span><?php echo $row->tanggal_resepsi; ?></span>
                                <p class="midd"><?php echo $row->tempat_resepsi; ?></p>
                                <p><?php echo $row->alamat_resepsi; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php foreach ($mempelai->getResult() as $row){  ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="person rigth">
                            <figure><img src="<?= base_url() ?>/assets/users/<?= $row->key_image; ?>/bride.png" alt=""/></figure>
                            <div class="content">
                                <h2><?php echo $row->nama_pria; ?></h2>
                                <div class="con">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <div class="text-con">
                                        <span><?php echo "Putra ".$row->nama_ayah_pria . " & " .$row->nama_ibu_pria  ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--About area End here-->
        <!--Counter area start here-->

        <section class="counter_area_2">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-5 col-sm-12 pd-0">

                        <div class="count-con">

                            <h2>Dont’s miss it</h2>

                            <p></p>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 col-md-offset-1">

                        <div class="count-number">

                            <ul>

                                <li><div class="con"><span class="days">00</span><p>Days</p></div></li>

                                <li><div class="con"><span class="hours">00</span><p>hours</p></div></li>

                                <li><div class="con"><span class="minutes">00</span><p>minutes</p></div></li>

                                <li><div class="con"><span class="seconds">00</span><p>seconds</p></div></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Counter area end here-->

        <!--Family area start here-->

     
        <!--Family area end here-->

        <!--Love story area start here-->

        <section  section-scroll='2' class="love_sory_2 section">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <p>Jenny & Mark</p>

                            <h2>Our true love story</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 col-sm-12">

                        <div class="story-left">

                            <div class="story">

                                <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/story/1.jpg" alt=""/></figure>

                                <div class="date"><strong>27</strong><span>june</span></div>

                                <div class="content">

                                    <h2>Our First Met</h2>

                                    <h4>That day changed Life</h4>

                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sag.</p>

                                </div>

                                <span class="dot"></span>

                            </div>

                            <div class="story">

                                <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/story/1.jpg" alt=""/></figure>

                                <div class="date"><strong>27</strong><span>june</span></div>

                                <div class="content">

                                    <h2>Our First Met</h2>

                                    <h4>That day changed Life</h4>

                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sag.</p>

                                </div>

                                <span class="dot"></span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <div class="story-right">
                        
                            <div class="story">

                                <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/story/2.jpg" alt=""/></figure>

                                <div class="date"><strong>27</strong><span>june</span></div>

                                <div class="content">

                                    <h2>Our First Met</h2>

                                    <h4>That day changed Life</h4>

                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sag.</p>

                                </div>

                                <span class="dot"></span>

                            </div>

                            <div class="story">

                                <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/story/2.jpg" alt=""/></figure>

                                <div class="date"><strong>27</strong><span>june</span></div>

                                <div class="content">

                                    <h2>Our First Met</h2>

                                    <h4>That day changed Life</h4>

                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sag.</p>

                                </div>

                                <span class="dot"></span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Love story area end here-->

        <!--Event area start here-->

        <section section-scroll='3' class="event_area_2 section bg-img jarallax af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <p>Awaited moment of our life</p>

                            <h2>The Wedding Events</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 pd-0">

                        <div class="event-slider">
                        <?php 
	
                            foreach ($acara->getResult() as $row){ 
                                $tanggal_akad =  $row->tanggal_akad;
                                $tanggal_resepsi =  $row->tanggal_resepsi;
                            ?>
                            <div class="col-sm-12">

                                <div class="event-list">

                                    <!-- <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/event/1.jpg" alt=""/></figure> -->

                                    <div class="date"><strong><?php echo $row->tanggal_akad; ?></strong></div>

                                    <div class="content">

                                        <h2>Akad Nikah</h2>

                                        <h4><?php echo $row->jam_akad; ?></h4>

                                        <p><?php echo $row->tempat_akad; ?>,<br><?php echo $row->alamat_akad; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="event-list">

                                    <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/event/2.jpg" alt=""/></figure>

                                    <div class="date"><strong><?php echo $row->tanggal_resepsi; ?></strong></div>

                                    <div class="content">

                                        <h2>Resepsi Nikah</h2>

                                        <h4><?php echo $row->jam_resepsi; ?></h4>

                                        <p><?php echo $row->tempat_resepsi; ?>,<br><?php echo $row->alamat_resepsi; ?></p>

                                    </div>

                                </div>

                            </div>
                            <?PHP } ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Event area End here-->

        <!--Google map area Start-->

        <div class="maps">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12 col-sm-12 pd-0">

                        <div id="map_wrapper">

                              <?= $maps ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Google map area End-->

        <!--gallery area start here-->

      
        <!--gallery area End here-->
        <!--Blog area start here-->
        <!-- <section section-scroll='5' class="blog_area_2 section bg-img jarallax af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <p>awaited moment</p>

                            <h2>FROM OUR BLOG</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 pd-0">

                        <div class="blog-slider">

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/1.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/2.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/1.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/2.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/1.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-12">

                                <div class="blogs">

                                    <figure><img src="assets/images/blog/2.jpg" alt=""/><h2>Planing baby Future</h2></figure>

                                    <div class="date"><strong>27</strong><span>july</span></div>

                                    <div class="content">

                                        <ul>

                                            <li><i class="fas fa-user"></i><span>Sundy s.</span></li>

                                            <li><i class="fas fa-eye"></i><span>5512 view</span></li>

                                            <li><i class="fas fa-thumbs-up"></i><span>1254 like</span></li>

                                            <li><i class="fas fa-comments"></i><span>786 comment</span></li>

                                        </ul>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal dison of letters, as opposed to using. </p>

                                        <a href="#">Read more<i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->
        <!--Blog area end here-->

        <!--Guest area start here-->

        <section  class="guest_area_2 section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Rspv</p>  
                            <h2>Be our guest!</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="guest-img">
                            <figure><img src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/images/banner/1.jpg" alt=""/></figure>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="guest-con">
                            <h2>You’re Invited <span>Jenny & Mark</span> Wedding</h2>
                            <h4>Please Rsvp Before <span>15 May 2017</span></h4>
                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <p class="mr-0">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Guest area end here-->

        <!--Registry area start here-->
        <!--Registry area end here-->

        <!--Rspv area start here-->

        <section  section-scroll='7' class="rspv_area_2 section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="rspv-forms">
                            <div class="header">
                                <h2>Are You Attending?<span>Rspv here!</span></h2>
                            </div>
                            <form>
                                <fieldset><input type="text" name="full_name" placeholder="First Name" class="require"></fieldset>
                                <fieldset><input type="text" name="full_name"  placeholder="Last Name" class="require"></fieldset>
                                <fieldset><input type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid."></fieldset>
                                <fieldset>
                                    <select name="guest_no" class="require">
                                        <option>Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </fieldset>
                                <fieldset>

                                    <select name="event_name" class="require">
                                        <option>All Events</option>
                                        <option>All Events</option>
                                        <option>All Events</option>
                                        <option>All Events</option>
                                    </select>
                                </fieldset>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="response"></div>
								</div>

								 <button type="button" class="submitForm btn1" form-type="inquiry">I Am Attenting</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="testimonial">
                            <div class="listoftesti">
                                <h3>“ Better to have loved and lost, than to have never loved ”</h3>
                                <p>~ Sandeep S. ~</p>
                            </div> 
                            <div class="listoftesti">
                                <h3>“ Better to have loved and lost, than to have never loved ”</h3>
                                <p>~ Sandeep S. ~</p>
                            </div>
                            <div class="listoftesti">
                                <h3>“ Better to have loved and lost, than to have never loved ”</h3>
                                <p>~ Sandeep S. ~</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Rspv area end here-->
        <!--Info area start here-->
        <section class="info_area_2 section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="info-list">
                            <div class="ico"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h2>Home</h2>
                                <p>Jakarta</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="info-list">
                            <div class="ico"><i class="fas fa-phone" ></i></div>
                            <div class="content">
                                <h2>Phone</h2>
                                <p>0878-8700-5722</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="info-list">
                            <div class="ico"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h2>Email Us</h2>
                                <p>halomomenbahagia@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--Info area End here-->
        <!--Contact area start here--><!-- 
        <section section-scroll='6' class="contact_area_2 bg-img af jarallax section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>If Any Query</p>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                        <div class="con-form">
                            <form>
                                <div class="col-sm-6">
                                    <fieldset><input type="text" name="full_name" placeholder="Full Name" class="require"></fieldset>
                                    <fieldset><input type="Email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid."></fieldset>
                                    <fieldset><input type="number" name="contact_no" placeholder="Phone" class="require"></fieldset>
                                </div>

                                <div class="col-sm-6">
                                    <fieldset><textarea name="message" placeholder="Message" class="require"></textarea></fieldset>
                                </div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="response response_2"></div>
							</div>
                                <div class="col-sm-12 text-center">                       
									<button type="button" class="submitForm btn1 mr-t50" form-type="contact">Send a Message</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->
        <!--Contact area end here-->

        <!--Footer area start here-->

        <footer class="home_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="copyright">
                            <p>@ Copyright 2017 All Rights Reserved. By MomenBahagia.Co</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Footer area end here-->
		<!-- All JavaScript Here -->
		<!-- jQuery latest version -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/bootstrap.min.js"></script>
        <!-- Owl.carousel JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/owl.carousel.min.js"></script>
        <!-- Bxslider JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jquery.bxslider.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- meanmenu JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jquery.meanmenu.js"></script>
        <!-- jarallax JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jarallax.min.js"></script>
		<!-- jQuery-ui JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jquery-ui.min.js"></script>
        <!-- downCount JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/jquery.downCount.js"></script>
		<!-- masonry JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/masonry.pkgd.min.js"></script>
        <!-- wow JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/wow.min.js"></script>
		<!-- Plugins JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/plugins.js"></script>
		<!-- Init JavaScript -->
        <script src="<?php echo base_url() ?>/assets/themes/02_fall_wedding/assets/js/main.js"></script>
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
                map.setTilt(45);

                    

                // Multiple Markers
                var markers = [

                    ['Bagerhat, Bangladesh', 22.612416, 89.628240],
                    ['West Bengal, India', 22.519984, 87.777172],

                ];

                                
                // Info Window Content

                var infoWindowContent = [

                    ['<div class="info_content">' +
                    '<h3>Wedding party</h3>' +
                    '<p>Dinner party</p>' +
                    '<span>06:00 pm to 12:00 am</span>'+
                     '</div>'],
                    ['<div class="info_content">' +
                    '<h3>The Church</h3>' +
                    '<p>Cerimony</p>' +
                    '<span>10:00 Am to 12:00 pm</span>'+
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
                    this.setZoom(10);
                    google.maps.event.removeListener(boundsListener);
                });
          }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>

