<?php

session_start();
// $id=$_SESSION['id'];
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}

require 'db/config.php';

if (isset($_POST['search']) ){


  
}
if (isset($_POST['search']) && isset($_POST['filter'])) {
  // Process search and filter options
  $search = $_POST['search'];
  $filter = $_POST['filter'];

  $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
  if ($filter !== 'all') {
    $sql .= " AND category = '$filter'";
  }
  // ...rest of the code for handling the search and filter options
} else {
  // Display an error message or fallback content
  $sql = mysqli_query($conn, "SELECT * FROM `jobs`");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="search.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
  <div>
    <?php require("include/navbar.php") ?>
  </div>
  <div class="container my-5">
    <form method="POST">
      <div class="row searchFilter">
        <div class="col-sm-12">
          <div class="input-group">
            <input id="table_filter" type="text" class="form-control" name="search" aria-label="Text input with segmented button dropdown">
            <div class="input-group-btn">
              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="label-icon">Category</span> <span class="caret">&nbsp;</span></button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="category_filters">
                  <li>
                    <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio"><label for="all">All</label>
                  </li>
                  <li>
                    <input type="radio" name="radios" id="Design" value="Design"><label class="category-label" for="Design">Design</label>
                  </li>
                  <li>
                    <input type="radio" name="radios" id="Marketing" value="Marketing"><label class="category-label" for="Marketing">Marketing</label>
                  </li>
                  <li>
                    <input type="radio" name="radios" id="Programming" value="Programming"><label class="category-label" for="Programming">Programming</label>
                  </li>
                  <li>
                    <input type="radio" name="radios" id="Sales" value="Sales"><label class="category-label" for="Sales">Sales</label>
                  </li>
                  <li>
                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Support</label>
                  </li>
                </ul>
              </div>
              <button id="searchBtn" type="submit" class="btn btn-secondary btn-search"><span class="glyphicon glyphicon-search">&nbsp;</span> <span class="label-icon">Search</span></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="my-5 d-flex gap-4 mx-3">
    <?php
    while ($arr = mysqli_fetch_array($sql)) {
    ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $arr['job_title']; ?></h5>
          <p class="card-text"><?php echo $arr['job_description']; ?></p>

          <a href="viewJobDescription.php?id=<?php echo $arr['id']; ?>">

            <button type="button" class="btn btn-primary">View Job</button>
          </a>

        </div>
      </div>
    <?php   } ?>


  </div>

</body>

</html>