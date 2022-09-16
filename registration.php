<?php
session_start();
$con = mysqli_connect('localhost','root','12345');
mysqli_select_db($con, 'table');
$name = $_POST['user'];
$pass = $_POST['password'];
$pass1 = $_POST['confirmpassword'];
$s="insert into farmer(id,password) values('$name','$pass')";
if($pass==$pass1){
if(mysqli_query($con,$s)){
    header('location:login1.php');
}
else{
    echo "Username Already Taken";
}
}
else{
    echo "passwords does not match";
}


?>