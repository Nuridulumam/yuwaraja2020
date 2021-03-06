<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Website PK2MABA VOKASI</title>
    <link type="image/png" rel="icon" href="images/Asset 1.png" />
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Query-->
  <?php include('connect.php');
   error_reporting(E_ALL^(E_NOTICE| E_WARNING));
    $cek_status=$_SESSION['cek_status'];
  
  	
 if($cek_status==1 or $cek_status==3 or $cek_status==2)
{
   $data =$mysqli->query("select*from cluster1");
 $datacluster1=mysqli_fetch_assoc($data);
  }
  else{
  echo("<script>alert('Silahkan Login Terlebih Dahulu ');</script>");
echo("<script>document.location='logout.php';</script>");
}
  ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.html"> <img src="images/Asset 1.png" width="10%" height="10%"> &nbsp;PK2MABA Vokasi 2018</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dash.php">
            <i class="fa fa-home"></i>
            <span class="nav-link-text">Dashboard</span>          </a>        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cluster 1-9">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables Cluster 1-9</span>          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="cluster1.php?kode=1">Cluster 1</a>            </li>
            <li>
              <a href="cluster1.php?kode=2">Cluster 2</a>            </li>
              <li>
              <a href="cluster1.php?kode=3">Cluster 3</a>            </li>
              <li>
              <a href="cluster1.php?kode=4">Cluster 4</a>            </li>
            <li>
              <a href="cluster1.php?kode=5">Cluster 5</a>            </li>
            <li>
              <a href="cluster1.php?kode=6">Cluster 6</a>            </li>
              <li>
              <a href="cluster1.php?kode=7">Cluster 7</a>            </li>
              <li>
              <a href="cluster1.php?kode=8">Cluster 8</a>            </li>
             <li>
              <a href="cluster1.php?kode=9">Cluster 9</a>            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cluster 10-17">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables cluster 10-17</span>          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
           <li>
              <a href="cluster1.php?kode=10">Cluster 10</a>            </li>
            <li>
              <a href="cluster1.php?kode=11">Cluster 11</a>            </li>
              <li>
              <a href="cluster1.php?kode=12">Cluster 12</a>            </li>
              <li>
              <a href="cluster1.php?kode=13">Cluster 13</a>            </li>
            <li>
              <a href="cluster1.php?kode=14">Cluster 14</a>            </li>
            <li>
              <a href="cluster1.php?kode=15">Cluster 15</a>            </li>
              <li>
              <a href="cluster1.php?kode=16">Cluster 16</a>            </li>
              <li>
              <a href="cluster1.php?kode=17">Cluster 17</a>            </li>
             <li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cluster 18-24">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
     <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables Cluster 18-24</span>          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
           <li>
              <a href="cluster1.php?kode=18">Cluster 18</a>            </li>
            <li>
              <a href="cluster1.php?kode=19">Cluster 19</a>            </li>
              <li>
              <a href="cluster1.php?kode=20">Cluster 20</a>            </li>
              <li>
              <a href="cluster1.php?kode=21">Cluster 21</a>            </li>
            <li>
              <a href="cluster1.php?kode=22">Cluster 22</a>            </li>
            <li>
              <a href="cluster1.php?kode=23">Cluster 23</a>            </li>
              <li>
              <a href="cluster1.php?kode=24">Cluster 24</a>            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cluster 25-30">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages3" data-parent="#exampleAccordion">
           <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables Cluster 25-30</span>          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages3">
           <li>
              <a href="cluster1.php?kode=25">Cluster 25</a>            </li>
            <li>
              <a href="cluster1.php?kode=26">Cluster 26</a>            </li>
              <li>
              <a href="cluster1.php?kode=27">Cluster 27</a>            </li>
              <li>
              <a href="cluster1.php?kode=28">Cluster 28</a>            </li>
            <li>
              <a href="cluster1.php?kode=29">Cluster 29</a>            </li>
            <li>
              <a href="cluster1.php?kode=30">Cluster 30</a>            </li>
            
             <li>
          </ul>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cluster 31-32">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages4" data-parent="#exampleAccordion">
           <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables Cluster 31-32</span>          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages4">
           <li>
              <a href="cluster1.php?kode=31">Cluster 31</a>            </li>
            <li>
              <a href="cluster1.php?kode=32">Cluster 32</a>            </li>
           
            
             <li>
          </ul>
        </li>
       
        
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="penugasan.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Penugasan</span>          </a>        </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>
             <span class="nav-link-text">Logout</span>          </a>        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>          </a>        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      </div>
      <!-- Icon Cards-->
    
      <!-- Area Chart Example-->
      <div class="row">
        
          <!-- Example Bar Chart Card--><!-- Card Columns Example Social Feed-->
          <center>
            <table width="100%" border="0" align="center">
              <tr>
                <td><div align="center"><img src="images/Asset 1.png" width="50%"></div></td>
              </tr>
              <tr>
                <td><hr><div align="center"><strong><h3>SELAMAT DATANG ADMIN</h3></strong></div></td>
              </tr>
              <tr>
                <td><div align="center"><h5><font color="maroon">WEBSITE PK2MABA VOKASI UNIVERSITAS BRAWIJAYA 2018</font></h5></div></td>
              </tr>
            </table>
            <br>
          </center>
          
          
          <!-- /Card Columns-->
        </div>
        
      <!-- Example DataTables Card-->
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ?? DDM PK2MABA 2018</small>        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">??</span>            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>
