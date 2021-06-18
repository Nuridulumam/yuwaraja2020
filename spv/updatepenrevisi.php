<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
// $cluster = $_POST['cluster'];
// $pkkmb = $_POST['nilaipkkmb'];
// $lkmm = $_POST['n_lkmm'];
// $k1 = $_POST['n_k1'];
// $k2 = $_POST['n_k2'];
// $k3 = $_POST['n_k3'];
// $k4 = $_POST['n_k4'];
// $k5 = $_POST['n_k5'];
// $k6 = $_POST['n_k6'];
// $k7 = $_POST['n_k7'];
// $min = $_POST['minus'];
$total = $_POST['atotal'];
// $keterangan = $_POST['keterangan'];
// $awaloh = $_POST['n_k3'];
$awaloh2 = $_POST['n_k5'];


// if ($_POST['n_4']==null) {
// 	$awaloh = $_POST['n_k3'];
// 	$totalakhir = $_POST['atotal']+$_POST['n_k3'];
// 	mysqli_query($koneksi,"UPDATE tb_maba SET n_total='$totalakhir',n_k3='$awaloh' where id_maba='$id'");
// }else if($_POST['n_3']!=null){
// 	$awaloh = $_POST['n_k3'];
// 	$awaloh2 = $_POST['n_k4'];
// 	$totalakhir2 = $_POST['atotal']+$_POST['n_k4'];
// 	mysqli_query($koneksi,"UPDATE tb_maba SET n_total='$totalakhir2',n_k4='$awaloh2,n_k3='$awaloh' where id_maba='$id'");
// }

$totalakhir = $_POST['atotal']+$_POST['n_k5'];
// echo $totalakhir;
// update data ke database
mysqli_query($koneksi,"UPDATE tb_maba SET n_total='$totalakhir',n_k5='$awaloh2' where id_maba='$id'");

// mengalihkan halaman kembali ke index.php
header("location:revisipen.php");

?>