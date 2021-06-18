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
    <link type="image/png" rel="icon" href="images/2020/logotab.png" />

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
    <script src="js/jquery.min.js"> </script>
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
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>
    <?php
    include 'koneksi.php';
    $cluster = $_SESSION['cluster'];
    $data = mysqli_query($koneksi, "SELECT * from tb_maba WHERE cluster=$cluster order by id_maba ASC ");
    $datacluster1 = mysqli_fetch_assoc($data);
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
                </div><!-- /.navbar-collapse -->
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
                                    <li><a href="maba.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Mahasiswa Baru</a></li>

                                    <li><a href="penpenugasan.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Penilaian Penugasan</a></li>

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
                        <span>Verifikasi Seluruh Mahasiswa</span>
                    </h2>
                </div>
                <!--//banner-->
                <!--content-->

                <!---->


                <div class="content-mid">
                    <div class="typo-grid">

                        <div class="typo-1">
                            <div class="grid_3 grid_5">



                                <h3>Verifikasi Seluruh Mahasiswa</h3>
                                <div class="but_list">
                                    <div class="col-md-12 page_1">
                                        <p>Verifikasi Penilaian Penugasan Mahasiswa Baru Vokasi 2019 Cluster <?= $_SESSION['cluster']; ?></p>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">No.</th>
                                                            <th width="35%">Nama</th>
                                                            <th width="20%">NIM</th>
                                                            <th width="20%">Bidang Minat</th>
                                                            <th width="10%">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        do {

                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $no++ ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $datacluster1['nama'] ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $datacluster1['nim'] ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $datacluster1['jurusan'] ?>
                                                                </td>
                                                                <td>
                                                                    <!-- <a href="editcluster.php?kode=<?php echo $datacluster1['nim'] ?>"> -->
                                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModaledit<?php echo $datacluster1['nim'] ?>">Detail</button>
                                                                    <!-- </a> -->

                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="myModaledit<?php echo $datacluster1['nim'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h2 class="modal-title modal-lg "><?php echo $datacluster1['nama'] ?> | <?php echo $datacluster1['nim'] ?> </h2>
                                                                            <h1 class="modal-tittle modal-md">Hasil Penilaian</h1>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="updaterevisi.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                                                                                <div class="clearfix"> </div>
                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                    <label class="control-label">Alpha</label>
                                                                                    <input class="form-control bg-secondary text-light" type="text" placeholder="Alpha" name="aplha" value="<?php echo $datacluster1['alpha'] ?>x" readonly>
                                                                                </div>

                                                                                <div class="clearfix"> </div>
                                                                                <div class="col-md-3 form-group1 group-mail has-info">
                                                                                    <label class="control-label "><strong> Nilai PKKMB 1 </strong> </label>
                                                                                    <input class="form-control bg-success text-light" type="text" placeholder="PKKMB 1" name="nilaipk1" value="<?php echo $datacluster1['n_pkkmb1'] ?>" disabled>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai PKKMB 2</strong></label>
                                                                                    <input class="form-control bg-success text-light" type="text" placeholder="PKKMB 2" name="nilaipk2" value="<?php echo $datacluster1['n_pkkmb2'] ?>" disabled>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai Krima 1</strong></label>
                                                                                    <input class="form-control bg-primary text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k1'] ?>" readonly>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai Krima 2</strong></label>
                                                                                    <input class="form-control bg-primary text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k2'] ?>" readonly>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai Krima 3</strong></label>
                                                                                    <input class="form-control bg-primary text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k3'] ?>" readonly>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai Krima 4</strong></label>
                                                                                    <input class="form-control bg-primary text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k4'] ?>" readonly>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Nilai Krima 5</strong></label>
                                                                                    <input class="form-control bg-primary text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k5'] ?>" readonly>
                                                                                </div>

                                                                                <div class="col-md-3 form-group1 group-mail ">
                                                                                    <label class="control-label"><strong>Minus</strong></label>
                                                                                    <input class="form-control bg-danger text-light" type="text" placeholder="-" name="nilaipk2" value="<?php echo $datacluster1['n_k5'] ?>" readonly>
                                                                                </div>

                                                                                <div class="clearfix"> </div>
                                                                                <div class="col-md-12 form-group1 group-mail">
                                                                                    <label class="control-label">Total</label>
                                                                                    <input class="form-control bg-warning text-light" type="text" placeholder="Total" name="aplha" value="<?php echo $datacluster1['n_total'] ?>" readonly>
                                                                                </div>
                                                                                <div class="col-md-12 form-group">
                                                                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                                                </div>
                                                                                <div class="clearfix"> </div>
                                                                            </form>

                                                                            <!---->

                                                                        </div>

                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                        <?php
                                                        } while ($datacluster1 = mysqli_fetch_assoc($data));
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
                    <p> &copy; 2019 Minimal. All Rights Reserved | Design by BIT PK2MABA Vokasi 2019 <span style="color: #fff">W3layouts</span> </p>
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