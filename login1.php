<?php
session_start();
?>
<html>
    <head>
        <title> FARMER SITE</title>
        <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <style>
        body{
            background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
        }
     .e{
        margin-right:75px;
     }
     .button{
         background-color:pink;
         margin-left:105px   
     }
     .k{
         margin-right:70px;
     }
     a{
         float:right;
     }

    </style>
        <head>
    <body>
<center>
<a href="index.html">BACK</a>
    <h1>Farmer Registration</h1>

<form method="post" action="registration.php">
            <label class="e">CHOOSE ID</label>
            <input type="text" name="user" required><br>
            <label class="e">PASSWORD</label>
            <input type="password" name="password" required> <br>
            <label>CONFIRM PASSWORD</label>
            <input type="password" name="confirmpassword" required> <br>
            <button  class="button" type="submit" name="sub">REGISTER</button>

</form>  


<form method="post" action="validation.php">
           <label class="e">FARMER ID</label>
            <input type="text" name="user" required><br>
            <label class="k">PASSWORD</label>
            <input type="password" name="password" required> <br>
            <button  class="button" type="submit" name="sub">LOGIN</button>
</form> 
    </center>

</body>
</html>