<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

    <div>
        <?php require("navbar.php") ?>
          </div>

<div class="">
<div class="card">
  <div class="card-body">
    <h1 class="card-title text-center">Profile</h5>


    <div class=" d-flex gap-3">
            <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
             
          </div>
          <div class=" d-flex gap-3">
            <div class="mb-3  col-6">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3 col-6">
                <label for="exampleFormControlTextarea1" class="form-label">Mobile No.</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
          </div>

          <div class=" d-flex gap-3">
            <div class="mb-3  col-6">
                <label for="exampleFormControlInput1" class="form-label">Location </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3 col-6">
                <label for="exampleFormControlTextarea1" class="form-label">Experience</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
          </div>
          <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Skills</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Uplaod Resume</label>
  <input class="form-control" type="file" id="formFile">
</div>
              <a href="#" class="btn btn-primary">Update</a>
  </div>
</div>
</div>

  


</body>
</html>