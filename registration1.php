<?php

session_start();


$con = mysqli_connect('localhost','root','12345');
mysqli_select_db($con, 'table');
$name = $_POST['users1'];
$pass = $_POST['passwords1'];
$pass1 = $_POST['confirmpasswords1'];
$busi = $_POST['business1'];
$s="insert into supplier(ID,password,business) values('$name','$pass','$busi')";
if($pass==$pass1){
if(mysqli_query($con,$s)){
     $_SESSION['bus']= $busi;
    header('location:login.php');
}
else{
    echo "Username Already Taken";
}
}
else{
    echo "passwords does not match";
}


?>