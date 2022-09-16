<?php
   session_start();
   ?>

<?php

    
    $con=mysqli_connect('localhost','root','12345');
    mysqli_select_db($con,'table');
   $uv=$_SESSION['users1'];
   echo $uv;
   $g="select farmer.id  from farmer,supplier where farmer.desird_product=supplier.business and supplier.ID='$uv' ";
   //$m="select farmer.desird_product  from farmer,supplier where farmer.desird_product=supplier.business and supplier.ID='$uv' ";
   $res=mysqli_query($con,$g);
   
   $flag=0;

   while($r=mysqli_fetch_assoc($res)){ 
   echo "Farmer is :{$r['id']}";
   $flag=$flag+1;
   }
   if($flag==0){
       echo "\nNo Orders yet!!";
   }
   
   
   ?>

   
<html>
        <head>
            <style>
                button{
                    padding:24px;
                }
                </style>
</head>
        <body bgcolor="lightblue">
            <form method="post" action="approve.php">
                <button >Approve</button>

</form>
           
        </body>
</html>

