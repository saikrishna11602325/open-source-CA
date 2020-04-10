<?php
     session_start();
//connect to databaase
$db = mysqli_connect("localhost","root","","authentication");
 if (isset($_POST[ 'register_btn']))
 { 
     $username =$_POST['username'];
     $email =$_POST['email'];
     $password =$_POST['password'];
     $password2 =$_POST['password2'];
     
     if ($password == $password2)
     {
          //create user
         $password = md5($password);
         $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
         mysqli_query($db,$sql);
         $_SESSION['username'] = $username;
         header("location: home.php");
     }
     else
     {
         echo "<script> alert('doesnot match password');</script>";
        //$_SESSION['passworderror'] = "the two passwords donot match!";
         //failed
     }

 }
?>







<!DOCTYPE html>
<html>
<head>
    <title> 
    Register,login and logout user php mysql
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <div class ="header">
        
        <h1>Register,login and logout user php mysql</h1></div>
        <form method="post" action="register.php">
        <table>
            <tr>
            <td>Username</td>
                <td> <input type="text" name="username" required></td>
        </tr><tr><td>Email:</td>
                <td> <input type="email" name="email" required></td>
        </tr>
            <tr>
<td>password</td>
                <td> <input type="password" name="password" required></td>
        </tr>
            <tr>
<td>password again</td>
                <td> <input type="password" name="password2" required></td>
        </tr>
            <tr>
<td></td>
                <td> <input type="submit" name="register_btn" value="Register"></td>
        </tr>

            
            
            
            </table></form>
    </body>
    
</html>