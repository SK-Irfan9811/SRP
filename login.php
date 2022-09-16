<?php
session_start();
?>
<html>
    <head>
        <title>SUPPLIER SITE</title>
        <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

    <style>
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
     .o{
         margin-left:-120px;
     }
     a{
         float:right;
     }

    </style>
    </head>
    <body style="background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);">
    <center>
    <a href="index.html">BACK</a>
    <h1>SUPPLIER REGISTRATION</h1>
<form method="post" action="registration1.php">
            <label class="e">CHOOSE ID</label>
            <input type="text" name="users1" required><br>
            <label class="e">PASSWORD</label>
            <input type="password" name="passwords1" required> <br>
            <label>CONFIRM PASSWORD</label>
            <input type="password" name="confirmpasswords1" required> <br>
            <label class="o">MENTION SERVICE</label> 
            <select name="business1">
                <option>Pesticides</option>
                <option>assitance</option>
                <option>plants</option>
                <option>seeds</option>                  
            </select> <br>

            <button  class="button" type="submit" name="sub">REGISTER</button>

</form> 

<form method="post" action="validation1.php">
           <label class="e">SUPPLIER ID</label>
            <input type="text" name="users1" required><br>
            <label class="e">PASSWORD</label>
            <input type="password" name="passwords1" required> <br>
            <button  class="button" type="submit" name="sub">LOGIN</button>
</form>
    </center>
</body>
</html>
