<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Website PKKMB VOKASI UB</title>
    <link type="image/png" rel="icon" href="images/2020/logotab.png" />


    <!-- Favicon -->

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->

    <!-- Top Header_Area -->
    <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+62 895-3963-70928</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>pkkmaba.vokasiub@gmail.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.youtube.com/channel/UCcqb_2ahQhStJHcqbuvZcHw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/pkkmb_vokasiub" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/pkkmb_vokasiub/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="http://line.me/ti/p/~@vgh3838g" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <nav class="navbar navbar-default header_area" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/2020/brandlogo.png" height="56px" style="margin-top: -20px;" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://yuwaraja.vokasi.ub.ac.id">Home</a></li>
                        <li><a href="penugasan.php">Penugasan</a></li>
                        <li><a href="penilaian.php">Penilaian</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="infopenting.html">Informasi</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <!-- <li><a href="pk2maba1/index.php">Login</a></li> -->

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>DAFTAR CLUSTER</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Cluster</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog-2 area -->
    <section class="blog_tow_area">
        <div class="container">
            <div class="row blog_tow_row">
                <?php
                $no = 1;
                while ($no <= 37) {

                ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="renovation">
                            <div class="renovation_content">
                                <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                                <a class="tittle" href="datacluster.php?kode=<?php echo $no ?>">Cluster <?php echo  $no ?></a>
                                <div class="date_comment">
                                    <a href="#"> <i class="fa fa-user" aria-hidden="true"></i>&nbsp;BIT PKKMB VOKASI</a>

                                </div>
                                <p>Berikut data Cluster <?php echo $no ?> bagi mahasiswa baru </p>

                            </div>
                        </div>
                    </div>
                <?php
                    $no++;
                }

                ?>

            </div>
        </div>
    </section>
    <!-- End blog-2 area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src="images/2020/brandlogo.png" height="56px" style="margin-top: -20px;" alt="">
                    <p>Website seputar seluruh informasi penugasan serta penilaian PKKMB Vokasi Universitas Brawijaya</p>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    <ul class="quick_link">
                        <li><a href="http://yuwaraja.vokasi.ub.ac.id"><i class="fa fa-chevron-right"></i>PKKMB</a></li>
                        <li><a href="penugasan.php"><i class="fa fa-chevron-right"></i>Penugasan</a></li>
                        <li><a href="penilaian.php"><i class="fa fa-chevron-right"></i>Penilaian</a></li>
                        <li><a href="gallery.html"><i class="fa fa-chevron-right"></i>Gallery</a></li>
                        <li><a href="about.html"><i class="fa fa-chevron-right"></i>About Us</a></li>
                        <li><a href="http://yuwaraja.vokasi.ub.ac.id/spv"><i class="fa fa-chevron-right"></i>Login Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Social Media</h2>
                    <ul class="quick_link">
                        <font color="white">
                            <li><a href="https://www.youtube.com/channel/UCcqb_2ahQhStJHcqbuvZcHw" target="_blank"><i class="fa fa-youtube"></i>YouTube</a><br>
                                <center>
                                    <font color="#FFD700">Yuwaraja Vokasi
                                </center>
                            </li>
                        </font>
                        <li><a href="https://twitter.com/pkkmb_vokasiub" target="_blank"><i class="fa fa-twitter"></i>Twitter</a><br>
                            <center>
                                <font color="#FFD700">@pkkmb_vokasiub
                            </center>
                            </font>
                        </li>
                        <li><a href="https://www.instagram.com/pkkmb_vokasiub/" target="_blank"><i class="fa fa-instagram"></i>Instagram</a><br>
                            <center>
                                <font color="#FFD700">pkkmb_vokasiub
                            </center>
                            </font>
                        </li>
                        <li><a href="http://line.me/ti/p/~@vgh3838g" target="_blank"><i class="fab fa-line"></i>LINE</a><br>
                            <center>
                                <font color="#FFD700">@vgh3838g
                            </center>
                            </font>
                        </li>
                        <li><a href="http://yuwaraja.vokasi.ub.ac.id/" target="_blank"><i class="fab fa-internet-explorer"></i></i>Website</a><br>
                            <center>
                                <font color="#FFD700">yuwaraja.vokasi.ub.ac.id
                            </center>
                            </font>
                        </li>
                        </font>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>pkkmaba.vokasiub@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+62 895-3963-70928</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Jl. Veteran No.12-16 Malang, Jawa Timur, Indonesia </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2020 All rights reserved. Designed by <a href="">BIT PKKMB VOKASI 2020</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>

</html>