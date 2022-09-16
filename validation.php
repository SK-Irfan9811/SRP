<?php
session_start();
$con=mysqli_connect('localhost','root','12345');
mysqli_select_db($con ,'table');
$name=$_POST['user'];
$pass=$_POST['password'];
$e="select * from farmer where id='$name' and password='$pass'";
$result=mysqli_query($con,$e);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['user']= $name;
    header('location:home.php');
}
else{
    header('location:login1.php');
}
/*if(){
    //header('location:home.php');
    echo  "YES";
}
else{
    
    header('location:login1.php');
}*/

?>