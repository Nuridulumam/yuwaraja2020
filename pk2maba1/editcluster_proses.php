<?php 
include('connect.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));
$kode=$_GET['kode'];


$jurusan=$_POST['jurusan'];
$cluster=$_POST['cluster'];
$pkk1=$_POST['pkk1'];

$k1=$_POST['k1'];
$k2=$_POST['k2'];
$k3=$_POST['k3'];
$k4=$_POST['k4'];
$k5=$_POST['k5'];
$k6=$_POST['k6'];
$k7=$_POST['k7'];
$lkmm=$_POST['lkmm'];
$minus=$_POST['minus'];
$kesalahan=$_POST['kesalahan'];
$tot=$_POST['total'];
$total=$pkk1+$k1+$k2+$k3+$k4+$lkmm+$k5+$k6+$k7-$minus;



$edit=$mysqli->query("update mahasiswa set jurusan='$jurusan',cluster='$cluster',PK01='$pkk1',P01='$k1',P02='$k2',P03='$k3',P04='$k4',P05='$k5',P06='$k6',P07='$k7',LKMM='$lkmm',minus='$minus',total='$total',kesalahan='$kesalahan' where nim='$kode'");

if($edit){
echo("<script>alert('Data telah diubah');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='dash.php'</script>");

}

?>