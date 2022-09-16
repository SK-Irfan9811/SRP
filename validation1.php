<?php
session_start();
$con=mysqli_connect('localhost','root','12345');
mysqli_select_db($con ,'table');
$name=$_POST['users1'];
$pass=$_POST['passwords1'];
$e="select * from supplier where ID='$name' and password='$pass'";
$result=mysqli_query($con,$e);
$num = mysqli_num_rows($result);
if($num == 1){
     echo $_SESSION['users1']= $name;
    header('location:home1.php');
}
else{
    header('location:login.php');
}
/*if(){
    //header('location:home.php');
    echo  "YES";
}
else{
    
    header('location:login1.php');
}*/

?>