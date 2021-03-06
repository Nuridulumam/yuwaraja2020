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
            <h3>Cluster. </h3>
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
                <li><a href=""><i class="fa fa-user"></i>Log Out</a></li>
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
                <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
              </li>

              <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Data Maba Vokasi</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Mahasiswa Baru</a></li>

                  <li><a href="" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Penilaian Penugasan</a></li>

                  <li><a href="" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i>Penugasan</a></li>

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
            <i class="fa fa-angle-right"></i>
            <span></span>
          </h2>
        </div>
        <!--//banner-->
        <!--content-->

        <!---->


        <div class="content-mid">
          <div class="typo-grid">

            <div class="typo-1">
              <div class="grid_3 grid_5">

                <h4>Nama | NIM</h4>

                <div class="but_list">
                  <div class="col-md-12 page_1">
                    <p>Data Penilaian Mahasiswa Baru Vokasi 2019 di dalam Cluster</p>
                    <table class="table table-bordered">
                      <div class="validation-system">

                        <div class="validation-form">
                          <!---->


                          <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                <label class="control-label">Nilai PK2MABA</label>
                                <input type="hidden" name="id" value="">

                                <input type="text" placeholder="PKKMABA" name="pk2" value="">
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                <label class="control-label">Nilai LKMM</label>
                                <input type="text" placeholder="LKMM" name="lkmm" value="">
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                <label class="control-label">Nilai Krima 1</label>
                                <input type="text" placeholder="Krima 1" name="k1" value="">
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                <label class="control-label">Nilai Krima 2</label>
                                <input type="text" placeholder="Krima 2" name="k2" value="">
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                <label class="control-label">Nilai Krima 3</label>
                                <input type="text" placeholder="Krima 3" name="k3" value="">
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                <label class="control-label">Nilai Krima 4</label>
                                <input type="text" placeholder="Krima 4" name="k4" value="">
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                <label class="control-label">Nilai Krima 5</label>
                                <input type="text" placeholder="Krima 5" name="k5" value="">
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                <label class="control-label">Nilai Krima 6</label>
                                <input type="text" placeholder="Krima 6" name="k6" value="">
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                <label class="control-label">Nilai Krima 7</label>
                                <input type="text" placeholder="Krima 7" name="k7" value="">
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group1 group-mail">
                              <label class="control-label">Minus</label>
                              <input type="text" placeholder="Minus" name="minus" value="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="col-md-12 form-group1 group-mail">
                              <label class="control-label">Nilai Total Krima</label>
                              <input type="text" placeholder="Total Nilai" name="total" value="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="col-md-12 form-group1 ">
                              <label class="control-label">Catatan Mahasiswa</label>
                              <textarea placeholder="Your Comment..." name="ctt" value=""></textarea>
                            </div>
                            <div class="clearfix"> </div>


                            <div class="col-md-12 form-group">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            <div class="clearfix"> </div>
                          </form>
                          <?php ?>
                          <!---->
                        </div>

                      </div>
                    </table>
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
  <script src="js/bootstrap.min.js"> </script>
</body>

</html>