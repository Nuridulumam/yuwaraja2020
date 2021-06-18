<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <title>Website PKKMB VOKASI UB</title>
  <link type="image/png" rel="icon" href="images/2019/logotab.png" />

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
  <link href="pk2maba1/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">


  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?php
  include 'spv/koneksi.php';
  $kode = $_GET['kode'];
  $kd = $_GET['kode'];
  $data = mysqli_query($koneksi, "SELECT * from tb_maba  where cluster='$kd' order by jurusan ASC");
  $datacluster1 = mysqli_fetch_assoc($data);
  ?>
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
  <nav class="navbar navbar-default header_aera" id="main_navbar">
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
          <a class="navbar-brand" href="index.html"><img src="images/2019/logopk2.png" alt=""></a>
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
    <h2>DATA cluster <?php echo $kode ?></h2>
    <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li><a href="#" class="active">Penilaian </a></li>
      <li><a href="#" class="active">Cluster <?php echo $kode ?></a></li>
    </ol>
  </section>
  <!-- End Banner area -->

  <!-- blog-2 area -->
  <section class="blog_tow_area">
    <div class="container">

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Cluster <?php echo $kode ?></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Keterangan</th>
                  <!-- <th>Total</th> -->

                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                do {

                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $datacluster1['nim'] ?></td>
                    <td><?php echo $datacluster1['nama'] ?></td>
                    <td><?php echo $datacluster1['jurusan'] ?></td>
                    <td><?php
                        if ($datacluster1['n_total'] >= 695 && $datacluster1['minus'] <= 2) {
                          echo 'LULUS';
                        } elseif ($datacluster1['n_total'] >= 695 && $datacluster1['minus'] > 2) {
                          echo 'TIDAK LULUS';
                        } elseif ($datacluster1['n_total'] < 695 && $datacluster1['minus'] <= 2) {
                          echo 'TIDAK LULUS';
                        } elseif ($datacluster1['n_total'] < 695 && $datacluster1['minus'] > 2) {
                          echo 'TIDAK LULUS';
                        }
                        ?></td>
                    <!-- <td><?php echo $datacluster1['total'] ?></td> -->
                  </tr>
                <?php
                } while ($datacluster1 = mysqli_fetch_assoc($data));
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"> <i class="fa fa-bell" aria-hidden="true"></i> Nilai total akan berubah setiap H+6 dari kegiatan . Nilai total diambil dari jumlah kehadiran mengikuti kegiatan dikurangi nilai kesalahan . Apabila terdapat pertanyaan, harap menghubungi SPV masing-masing .</div>
      </div>
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
          <img src="images/2019/logopk2.png" alt="">
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
      Copyright 2019 All rights reserved. Designed by <a href="">DDM PKKMB VOKASI 2019</a>
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
  <!-- Bootstrap core JavaScript-->
  <script src="pk2maba1/vendor/jquery/jquery.min.js"></script>
  <script src="pk2maba1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="pk2maba1/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="pk2maba1/vendor/datatables/jquery.dataTables.js"></script>
  <script src="pk2maba1/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="pk2maba1/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="pk2maba1/js/sb-admin-datatables.min.js"></script>
</body>

</html>