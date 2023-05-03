<?php
require 'db/config.php';

    session_start();
    if (!isset($_SESSION['id'])) {
      header("location:login.php");
    }
$id = $_SESSION['id'];

$applications = mysqli_query($conn, "SELECT jobs.* FROM jobs JOIN application ON jobs.id = application.job_id JOIN users ON application.user_id = users.id WHERE users.id = '$id'");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
  <div>
    <?php require("include/navbar.php") ?>
  </div>
  <div class="my-5 d-flex gap-4 mx-3">

    <?php
    while ($arr = mysqli_fetch_array($applications)) {
    ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $arr['job_title']; ?></h5>
          <p class="card-text"><?php echo $arr['job_description']; ?></p>

            <span class="badge rounded-pill bg-success">Applied</span>

        </div>
      </div>

    <?php
    }
    ?>

  </div>

</body>

</html>