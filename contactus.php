<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Wheeler</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link href="./css/SingUp.css" rel="stylesheet" />

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
            <a class="nav-link active" href="index.php"> Home </a>
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
            <a class="nav-link" href="logout.php">Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">Here we are</h1>
      </div>
      <hr />
      <div class="col-12">
        <p class="lead">You can Contact us through these also</p>
      </div>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4 ">
        <img src="./img/icon1.png" width="120px" />
        <h3>Facebook</h3>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="./img/icon3.png" width="120px" />
        <h3>Twitter</h3>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="./img/icon2.png" width="120px" />
        <h3>Instagram</h3>
      </div>
    </div>
    <hr class="my-4" />
  </div>

  <div class="container">
    <div class="row">
      <div class="footerlr col-sm">
        <div class="fitem">
          <p>Useful links</p>
          <p>
            <a href="./home.php">Login</a>
          </p>

          <p>
            <a href="./contactus.php">Help</a>
          </p>
        </div>
      </div>
      <div class="middleFooter col-sm d-none d-sm-block">
        <div class="special">
          <h4>Wheeler</h4>

        </div>
        <div class="iconx d-flex justify-content-around">
          <i class="fab fa-facebook-f "></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="footerlr col-sm">
        <div class="fitem">
          <p>Contacts</p>
          <p>
            <i class="fas fa-home mr-3"></i> North South University,
            Dhaka-1299
          </p>
          <p><i class="fas fa-envelope mr-3"></i> wheeler@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i> +880545452</p>
        </div>
      </div>
    </div>


</body>

</html>