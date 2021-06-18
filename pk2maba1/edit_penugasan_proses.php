<?php 
include('connect.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));
$kode=$_GET['kode'];
$judul=$_POST['judul'];
$tanggal=$_POST['tanggal'];
$deskripsi=$_POST['deskripsi'];


$edit=$mysqli->query("update penugasan set judul='$judul',tanggal='$tanggal',deskripsi='$deskripsi' where id='$kode' ");

if($edit){
echo("<script>alert('Data telah diubah');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='dash.php'</script>");

}

?>