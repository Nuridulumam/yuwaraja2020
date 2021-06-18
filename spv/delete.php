<?php 
include('koneksi.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));
$kode=$_GET['kode'];

$delete=mysqli_query($koneksi, "DELETE from tb_maba where id_maba='$kode'");

if($delete){
echo("<script>alert('Data telah dihapus');</script>");
echo("<script>document.location='maba.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='maba.php'</script>");

}

?>