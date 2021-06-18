<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$userpass = $_POST['password'];



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from tb_user where username='$username'");
// menghitung jumlah data yang ditemukan
$cek_data = mysqli_fetch_array($login);
// $password = $cek_data['password'];
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
	// cek jika user login sebagai admin
	if (password_verify($userpass, $cek_data['password'])) {
		session_start();
		$id = $cek_data['id_user'];
		$cluster = $cek_data['cluster'];
		$_SESSION['level'] = "spv";
		$_SESSION['cluster'] = $cluster;
		$_SESSION['id'] = $id;
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");
	} else {
		header("location:index.php?pesan=gagal");
		// header("location:dashboard.php");
	}
} else {
	header("location:index.php?pesan=gagal");
}
