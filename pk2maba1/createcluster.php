<?php 
include('connect.php');
error_reporting(E_ALL^(E_NOTICE| E_WARNING));
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$cluster=$_POST['cluster'];


$tambah=$mysqli->query("insert into mahasiswa values('$nim','$nama','$jurusan','$cluster','','','','','','','','','','','','','') ");

if($tambah){
echo("<script>alert('Data telah ditambahkan');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Gagal');</script>");
echo("<script>document.location='dash.php'</script>");

}

?>