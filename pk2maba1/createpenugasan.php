<?php 
include('connect.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));

$judul=$_POST['judul'];
$tanggal=$_POST['tanggal'];
$deskripsi=$_POST['deskripsi'];


$tambah=$mysqli->query("insert into penugasan values('','$judul','$tanggal','$deskripsi') ");

if($tambah){
echo("<script>alert('Data telah ditambahkan');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='dash.php'</script>");

}

?>