<?php 

require 'db/config.php';

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['name'];
  $age =$_POST['age'];
  $email =$_POST['email'];
  $password_1 = $_POST['password'];
  $password_2 = $_POST['cpassword'];

  $sql=mysqli_query($conn, "INSERT INTO `users`( `name`, `age`, `email`, `password`) VALUES ('$username','$age','$email','$password_2')");

  echo "<h3 class='text-success'>User account registered!</h3>";

  
}
?>
<!DOCTYPE html>
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
            <h3>Register</h3>
            <p>Please enter your credentials to Register.</p>
          </div>
        </div>
        <form class="login-form" method="post">
          <input type="text" name="name" placeholder="Name"/>
          <input type="number" name="age" id="name" placeholder="How old are you?">
          <input type="email" name="email" id="name" placeholder="Enter your Valid Email">
          <input type="password"  name="password" placeholder="Password"/>
          <input type="password"  name="cpassword" placeholder=" Confirm Password"/>
<div class="gender">
  <h6>Select Gender</h6>
  <input type="radio" name="gender" id="male">
          <span id="male">Male</span>
          <input type="radio" name="gender" id="female">
          <span id="female">Female</span>
</div>
          <button type="submit" name="reg_user">Register</button>
          <p class="message"> Registered? <a href="login.php">Login to an account</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>