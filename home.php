<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> 
    Logged in
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <div class ="header">
        
        <h1>HI YOU ARE LOGGED IN</h1></div>
        <div><h4>WELCOME <?php echo $_SESSION['username'];?></h4></div>

    </body>
    
</html>