<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$cluster = $_POST['cluster'];
$pkkmb1 = $_POST['pkkmb1'];
$pkkmb2 = $_POST['pkkmb2'];
$krima1 = $_POST['n_k1'];
$krima2 = $_POST['n_k2'];
$krima3 = $_POST['n_k3'];
$krima4 = $_POST['n_k4'];
$kejur = $_POST['n_k5'];


$total = $pkkmb1 + $pkkmb2 + $krima1 + $krima2 + $krima3 + $krima4 + $kejur;

// echo $totalakhir;
// update data ke database
mysqli_query($koneksi, "UPDATE tb_maba SET n_pkkmb1='$pkkmb1', n_pkkmb2='$pkkmb2', n_k1='$krima1', n_k2='$krima2', n_k3='$krima3', n_k4='$krima4', n_k5='$kejur', n_total='$total' where id_maba='$id'");

// mengalihkan halaman kembali ke index.php
header("location:penpenugasan.php");
