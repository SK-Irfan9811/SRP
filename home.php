<?php
    session_start();
 ?> 

    <html>
    <head>
        <title>FARMER PAGE</title>
        
</head>
<body bgcolor=hotpink>
    <a  style="float:right" href="logout.php">LOGOUT</a>
    <h2 style="text-align:center">Enter your desired product and click submit</h2>
    <center>
<form method="post" action="ask.php">
    <input type="text" name="product" >
    <input type='submit' name="subb" >
</form>
</center>

<center><h1>Welcome <?php echo $_SESSION['user']; ?> </h1> </center>
     
</body>
</html>
   
    

