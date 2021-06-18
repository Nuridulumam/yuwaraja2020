<?php 
session_start();
include('connect.php');
$exampleInputEmail1=$_POST['exampleInputEmail1'];
$exampleInputPassword1=$_POST['exampleInputPassword1'];

if($exampleInputEmail1=='Nagamaroon10@gmail.com' and
$exampleInputPassword1=='4sayap')
{

$_SESSION['cek_status']=1;
echo("<script>alert('Hello admin');</script>");
echo("<script>document.location='dash.php'</script>");
}







elseif($exampleInputEmail1=='nilaiyuwaraja10@gmail.com' and
$exampleInputPassword1=='spvraja10'){

$_SESSION['cek_status']=2;
echo("<script>alert('Hello spv');</script>");
echo("<script>document.location='cluster1.php'</script>");

}
elseif($exampleInputEmail1=='tugasyuwaraja10@gmail.com' and
$exampleInputPassword1=='kerjakanyuwa10')
{

$_SESSION['cek_status']=3;
echo("<script>alert('Hello');</script>");
echo("<script>document.location='dash.php'</script>");

}
else{
echo("<script>alert('Login Failed');</script>");
echo("<script>document.location='index.php'</script>");
}
?>