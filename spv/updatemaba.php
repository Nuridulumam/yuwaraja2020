<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$cluster = $_POST['cluster'];

// update data ke database
mysqli_query($koneksi, "UPDATE tb_maba set nama='$nama',nim='$nim',jurusan='$jurusan',cluster='$cluster' where id_maba='$id'");

// mengalihkan halaman kembali ke index.php
header("location:maba.php");
