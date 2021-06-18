<?php 
include('connect.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));
$kode=$_GET['kode'];


$edit=$mysqli->query("delete from penugasan where id='$kode' ");

if($edit){
echo("<script>alert('Data telah dihapus');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='dash.php'</script>");

}

?>