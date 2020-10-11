<?php
session_start();
if ($_SESSION['email'] == true) {
} else {
  header('location:adminlogin.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Dashboard</title>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


  <link href="css/dashboard.css" rel="stylesheet">


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>


</head>



<body>
  <nav id="navId" class="navbar navbar-expand-md navbar-light  sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./admin_dashboard.php"><?php echo $_SESSION['email']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

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
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Sign out</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <!--
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $_SESSION['email']; ?></a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">

      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    


    </ul>
  </nav>
-->