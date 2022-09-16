<?php

session_start();


$con = mysqli_connect('localhost','root','12345');
mysqli_select_db($con, 'table');
$prod = $_POST['product'];
$nn=$_SESSION['user'];
$p="UPDATE farmer
SET desird_product = '$prod'
where id='$nn'"; 

mysqli_query($con,$p);


echo "congrats!";

?>