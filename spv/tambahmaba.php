<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$cluster = $_POST['cluster'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

// update data ke database
mysqli_query($koneksi,"INSERT INTO tb_maba VALUES(NULL, '$nama', '$nim', '$jurusan', '$cluster', '', '', '', '', '', '', '', '', '', '', '', '' )");

// mengalihkan halaman kembali ke index.php
header("location:maba.php");
