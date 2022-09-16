<?php
session_start();
$con=mysqli_connect('localhost','root','12345');
mysqli_select_db($con,'table');
$ff=$_SESSION['users1'];
$o="select business from supplier where ID='$ff'";
$rt=mysqli_query($con,$o);
$gt=mysqli_fetch_assoc($rt);
$wq=$gt['business'];

$d="UPDATE farmer
SET desird_product=NULL where desird_product='$wq'";
mysqli_query($con,$d);

?>

