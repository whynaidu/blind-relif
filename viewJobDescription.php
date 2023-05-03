<?php
require 'db/config.php';
session_start();

if (!isset($_SESSION['id'])) {
  header("location:login.php");
}

if(isset($_GET['id'])){

$id = $_GET['id'];

}

  $sql=mysqli_query($conn,"SELECT * FROM `jobs` where id='$id'");
$job = mysqli_fetch_array($sql);

if(isset($_GET['apply'])){
    $jobid= $_GET['apply'];
    $user_id = $_SESSION['id'];
     $sql1=mysqli_query($conn,"INSERT INTO `application`(`job_id`, `user_id`) VALUES ('$jobid','$user_id')");
    if($sql1=1){
        header("location:success.php");
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php require("include/navbar.php") ?>
          </div>
          <div class="m-5">
  <div class="card">  
  <div class="card-body">
    <h5 class="card-title"><?php echo $job['job_title'];?></h5>
    <p class="card-text"><?php echo $job['job_description'];?></p>
    <a href="viewJobDescription.php?apply=<?php echo $job['id'];?>" class="btn btn-primary">Apply</a>
  </div>
</div>
</div>


</body>
</html>