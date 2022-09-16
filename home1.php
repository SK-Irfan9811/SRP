<?php
    session_start();
 ?> 

    <html>
    <head>
        <title>SUPPLIER PAGE</title>
</head>
<body bgcolor=hotpink>

    <a  style="float:right" href="logout1.php">LOGOUT</a>
    <center>
<form method="post" action="ask1.php">
    <button>Check orders</button>
</form>

<h1>Welcome 
<?php echo $_SESSION['users1'] ; 
?> </h1> 
</center>
     
</body>
</html>
   