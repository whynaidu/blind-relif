<?php
session_start();

// $id=$_SESSION['id'];
if(isset($_SESSION['id']))
{                                                                                       
  header("location:dashboard.php");
}
require 'db/config.php';

if(isset($_POST['login'])){
$Email=$_POST['email'];
$Password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from users where email='$Email' and password = '$Password1'");
if(mysqli_num_rows($sql)>0){

    $row=mysqli_fetch_assoc($sql); 
    $_SESSION['id']=$row['id'];
  
  echo "<script>alert('Login  is Sucsessfull');</script>";
  header("location:dashboard.php");
  
}
else{
    echo "<script>alert('Invalid Email or password');</script>";
}
}

?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
<title> Login Screen </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" method="POST">
          <input type="text" name="email" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button type="submit" name="login">login</button>
          <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>