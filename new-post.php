<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Wheler Admin</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Wheeler</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link href="./css/SingUp.css" rel="stylesheet" />
  <script src="./js/main.js"></script>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">


  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">


  <link href="./css/adminlogin.css" rel="stylesheet">
</head>

<body>
  <nav id="navId" class="navbar navbar-expand-md navbar-light  sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" width="200px" height="60px" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="./adminlogin.php">
              Admin
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="./index.php"> Home </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./contactus.php">
              Contact Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./aboutus.php"> About </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <br>



  <form class="form-signin" id="driverlogin" method="post" action="new-post.php" name="driverlogin">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h1 class="h3 mb-3 font-weight-normal">Welcome!</h1>
        </div>
      </div>
      <div class="row">
        <div class=" col-sm-offset-4">

          <h3 class="h3 mb-3 font-weight-normal">Please sign in</h3>
        </div>
      </div>
    </div>

    <label for="email" class="sr-only">Email address</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

    <label for="pass" class="sr-only">Password</label>
    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
    <br>
    <input name="submit" id="submit" type="submit" placeholder="sign in">

  </form>
</body>

</html>

<?php
include('../connection/db.php');



if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $query = mysqli_query($conn, "select * from jobskeer where email='$email' and password='$pass' ");

  // var_dump($query);
  if ($query) {

    if (mysqli_num_rows($query) > 0) {

      $_SESSION['email'] = $email;
      header('location:driver_dashboard.php');
    } else {
      echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
    }
  }
}


?>