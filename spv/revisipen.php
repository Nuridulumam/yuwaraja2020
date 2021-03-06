<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Panel Yuwaraja Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/png" rel="icon" href="images/2019/logotab.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js">
    </script>
    <!-- Mainly scripts -->
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js"></script>
    <script src="js/screenfull.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });

        });
    </script>

    <!----->

    <!--pie-chart--->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

        });
    </script>
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>
    <!--//skycons-icons-->
</head>

<body>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }

    ?>
        <?php 
    include 'koneksi.php';
    $cluster = $_SESSION['cluster'];
    $data =mysqli_query($koneksi,"SELECT * from tb_maba  where cluster='$cluster' order by id_maba ASC");
 $datacluster1=mysqli_fetch_assoc($data);
     ?>
            <div id="wrapper">

                <!----->
                <nav class="navbar-default navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1> <a class="navbar-brand" href="index.php">PK2MABA</a></h1>
                    </div>
                    <div class=" border-bottom">
                        <div class="full-left">
                            <section class="full-top">
                                <h3>Cluster. <?php echo $_SESSION['cluster']; ?></h3>
                            </section>

                            <div class="clearfix"> </div>
                        </div>

                        <!-- Brand and toggle get grouped for better mobile display -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="drop-men">
                            <ul class=" nav_1">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Admin / SPV <i class="caret"></i></span><img src="images/userdone.png"></a>
                                    <ul class="dropdown-menu " role="menu">
                                        <li><a href="logout.php"><i class="fa fa-user"></i>Log Out</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="clearfix">

                        </div>

                        <div class="navbar-default sidebar" role="navigation">
                            <div class="sidebar-nav navbar-collapse">
                                <ul class="nav" id="side-menu">

                                    <li>
                                        <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                                    </li>

                                    <li>
                                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Data Maba Vokasi</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="maba.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Mahasiswa Baru</a>
                                            </li>

                                            <li><a href="" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Penilaian Penugasan</a></li>

                                            <li><a href="verifikasi.php" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i>Verifikasi</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                </nav>
                <div id="page-wrapper" class="gray-bg dashbard-1">
                    <div class="content-main">

                        <!--banner-->
                        <div class="banner">

                            <h2>
                <a href="">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Penilaian Penugasan</span>
                </h2>
                        </div>
                        <!--//banner-->
                        <!--content-->

                        <!---->

                        <div class="content-mid">
                            <div class="typo-grid">

                                <div class="typo-1">
                                    <div class="grid_3 grid_5">

                                        <h3>Penilaian Penugasan Mahasiswa</h3>
                                        <div class="but_list">
                                            <div class="col-md-12 page_1">
                                                <p>Data Mahasiswa Baru Vokasi 2019 di dalam Cluster</p>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5%">No.</th>
                                                                    <th width="35%">Nama</th>
                                                                    <th width="20%">NIM</th>
                                                                    <th width="20%">Bidang Minat</th>
                                                                    <th width="20%">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
        $no=1;
        do{

              ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php  echo $no++ ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php  echo $datacluster1['nama'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $datacluster1['nim']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $datacluster1['jurusan']?>
                                                                        </td>
                                                                        <td>
                                                                            <!-- <a href="editcluster.php?kode=<?php echo $datacluster1['nim']?>"> -->
                                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModaledit<?php echo $datacluster1['nim']?>">Edit</button>
                                                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModaleditt<?php echo $datacluster1['nim']?>">Alpha</button>
                                                                            <!-- </a> -->

                                                                        </td>
                                                                    </tr>
                                                                    <div class="modal fade" id="myModaledit<?php echo $datacluster1['nim']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <p>
                                                                                        <h4><?php  echo $datacluster1['nama'] ?> | <?php  echo $datacluster1['nim'] ?></h4></p>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                                                                    <!-- <h2 class="modal-title">Edit Data Maba</h2> -->
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="validation-system">

                                                                                        <div class="validation-form">
                                                                                            <!---->

                                                                                            <form action="updatepenrevisi.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                                                                                                <!-- <div class="col-md-12 form-group1 group-mail">
                                                                        <label class="control-label">
              <label class="control-label">Cluster</label>
                                                                        <input type="text" placeholder="Cluster" name="cluster" value="<?php  echo $datacluster1['cluster'] ?>" required="">
                                                                    </div>
                                                                    <div class="clearfix"> </div> -->

                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">
                                                                                                        <label class="control-label">Nilai PKKMB</label>
                                                                                                        <input type="text" readonly placeholder="PKKMB" name="nilaipkkmb" value="<?php  echo $datacluster1['n_pkkmaba'] ?>" required="">
                                                                                                        <input type="hidden" placeholder="Nama" name="id" value="<?php  echo $datacluster1['id_maba'] ?>">
                                                                                                </div>
                                                                                                <div class="clearfix"> </div>
                                                                                                <!-- <div class="col-md-12 form-group1 group-mail"> 
                                                                                                    <label class="control-label">Nilai LKMM</label>
                                                                                                    <input type="text" readonly placeholder="LKMM" name="n_lkmm" value="<?php  echo $datacluster1['n_lkmm'] ?>">
                                                                                                    <input type="hidden" placeholder="Cluster" name="cluster" value="<?php  echo $datacluster1['cluster'] ?>" required="">
                                                                                                </div>

                                                                                                <div class="clearfix"> </div>
                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Nilai OH</label>
                                                                                                    <input type="text" placeholder="Nilai Open House" name="n_oh" value="<?php  echo $datacluster1['n_oh'] ?>">
                                                                                                </div>

                                                                                                <div class="clearfix"> </div> -->

                                                                                                <!-- <div class="col-md-12 form-group1 group-mail">
                                                                        <label class="control-label">Nilai Krima 2</label>
                                                                        <input type="text" placeholder="Krima" name="n_k2" value="<?php  echo $datacluster1['n_k2'] ?>" >
                                                                    </div>

                                                                    <div class="clearfix"> </div>

                                                                    <div class="col-md-12 form-group1 group-mail">
                                                                        <label class="control-label">Nilai Krima 5</label>
                                                                        <input type="text" placeholder="Krima" name="n_k5" value="<?php  echo $datacluster1['n_k5'] ?>">
                                                                    </div>

                                                                    <div class="clearfix"> </div>
                                                                    <div class="col-md-12 form-group1 group-mail"> 
                                                                        <label class="control-label">Nilai Krima 6</label>
                                                                        <input type="text" placeholder="Krima" name="n_k6" value="<?php  echo $datacluster1['n_k6'] ?>">
                                                                    </div>

                                                                    <div class="clearfix"> </div>
                                                                    <div class="col-md-12 form-group1 group-mail">
                                                                        <label class="control-label">Nilai Krima 7</label>
                                                                        <input type="text" placeholder="Krima" name="n_k7" value="<?php  echo $datacluster1['n_k7'] ?>">
                                                                    </div>

                                                                    <div class="clearfix"> </div> -->

                                                                                                <!-- <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Nilai Krima 3</label>
                                                                                                    <input type="text" value="<?php  echo $datacluster1['n_k3'] ?>" name="n_k3" <?php if ($datacluster1[ 'n_k3']!=null) { echo 'disabled'; } ?>>
                                                                                                </div>

                                                                                                <div class="clearfix"> </div>
                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Nilai Krima 4</label>
                                                                                                    <input type="text" value="<?php  echo $datacluster1['n_k4'] ?>" name="n_ksd4" <?php if ($datacluster1[ 'n_k4']!=null) { echo 'disabled'; } ?> >
                                                                                                </div>

                                                                                                <div class="clearfix"> </div> -->
                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Nilai Krima 5</label>
                                                                                                    <input type="text" value="<?php  echo $datacluster1['n_k5'] ?>" name="n_k5" <?php if ($datacluster1[ 'n_k5']!=null) { echo 'disabled'; } ?> >
                                                                                                </div>

                                                                                                <div class="clearfix"> </div>
                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Nilai Inagurasi</label>
                                                                                                    <input type="text" value="<?php  echo $datacluster1['n_k7'] ?>" name="n_k7" <?php if ($datacluster1[ 'n_k7']!=null) { echo 'readonly'; } ?> >
                                                                                                </div>

                                                                                                <div class="clearfix"> </div>
                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">Total</label>
                                                                                                    <input type="text" disabled placeholder="total" name="total" value="<?php  echo $datacluster1['n_total'] ?>">
                                                                                                    <input type="hidden" placeholder="total" name="atotal" value="<?php  echo $datacluster1['n_total'] ?>">
                                                                                                </div>

                                                                                                <div class="clearfix"> </div>

                                                                                                <div class="col-md-12 form-group">
                                                                                  <button type="submit" class="btn btn-primary">Submit</button>

                                                                                                </div>
                                                                                                <div class="clearfix"> </div>
                                                                                            </form>

                                                                                            <!---->
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>

                                                                    <div class="modal fade" id="myModaleditt<?php echo $datacluster1['nim']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <p>
                                                                                        <h4><?php  echo $datacluster1['nama'] ?> | <?php  echo $datacluster1['nim'] ?></h4></p>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                                                                    <!-- <h2 class="modal-title">Edit Data Maba</h2> -->
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="validation-system">

                                                                                        <div class="validation-form">
                                                                                            <!---->

                                                                                            <form action="updatepenugasann.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                                                                                                <!-- <div class="col-md-12 form-group1 group-mail">
                                                                        <label class="control-label">
              <label class="control-label">Cluster</label>
                                                                        <input type="text" placeholder="Cluster" name="cluster" value="<?php  echo $datacluster1['cluster'] ?>" required="">
                                                                    </div>
                                                                    <div class="clearfix"> </div> -->

                                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                                    <label class="control-label">
                                                                                                        <label class="control-label">Jumlah Alpha Mahasiswa Baru</label>
                                                                                                        <input type="text" placeholder="Jumlah Alpha" name="minus" value="<?php  echo $datacluster1['minus'] ?>" <?php if ($datacluster1[ 'minus']!=null) { echo 'readonly'; } ?>>
                                                                                                        <input type="hidden" placeholder="Nama" name="id" value="<?php  echo $datacluster1['id_maba'] ?>">
                                                                                                </div>
                                                                                                <div class="clearfix"> </div>

                                                                                                <div class="col-md-12 form-group">
                                                                                                   <button type="submit" class="btn btn-primary">Submit</button>

                                                                                                </div>
                                                                                                <div class="clearfix"> </div>
                                                                                            </form>

                                                                                            <!---->
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>

                                                                    <?php 
         }
         while($datacluster1=mysqli_fetch_assoc($data));
         ?>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="clearfix"> </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <!----->
                        <div class="content-bottom">

                            <div class="clearfix"> </div>
                        </div>
                        <!--//content-->

                        <!---->
                        <div class="copy">
                            <p> &copy; 2019 Minimal. All Rights Reserved | Design by DDM PK2MABA Vokasi 2019 <span style="color: #fff">W3layouts</span> </p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                </div>
                <!---->
                <!--scrolling js-->
                <script src="js/jquery.nicescroll.js"></script>
                <script src="js/scripts.js"></script>
                <!--//scrolling js-->
                <script src="js/bootstrap.min.js">
                </script>
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="js/sb-admin-datatables.min.js"></script>
</body>

</html>