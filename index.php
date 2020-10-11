<?php
session_start();

include('../connection/db.php');
$query = mysqli_query($conn, "select * from admin_login");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wheeler</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <script src="./js/main.js"></script>
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
                        <a class="nav-link active" href="adminlogin.php">
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

                    <li><a href="new-post.php" class="nav-link active">Login</a></li>








                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/image1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption">
                        <h1>
                            Wheeler
                        </h1>
                        <h5>
                            Your Perfect Place For Job
                        </h5>
                        <button type="button" onclick="window.location.href='./new-post.php'" style="min-width: 150px;">
                            Login
                        </button>
                        <button type="button" onclick="window.location.href='./sign_up.php'" style="min-width: 150px;">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/image2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption">
                        <h1>
                            Wheeler
                        </h1>
                        <h5>
                            Your Perfect Place For Job
                        </h5>
                        <button type="button" onclick="window.location.href='./new-post.php'" style="min-width: 150px;">
                            Login
                        </button>
                        <button type="button" onclick="window.location.href='./sign_up.php'" style="min-width: 150px;">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/image3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption">
                        <h1>
                            Wheeler
                        </h1>
                        <h5>
                            Your Perfect Place For Job
                        </h5>
                        <button type="button" onclick="window.location.href='new-post.php'" style="min-width: 150px;">
                            Login
                        </button>
                        <button type="button" onclick="window.location.href='sign_up.php'" style="min-width: 150px;">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Available Drivers</h1>
            </div>
            <hr />
            <div class="col-12">
                <p class="lead">Check Driver's Details</p>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="./img/meet1.jpg" />
                    <div class="card-body">
                        <h4 class="card-title">Mr. Poltu</h4>
                        <p>Experience of 2 months</p>
                        <a href="#">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="./img/meet2.jpg" />
                    <div class="card-body">
                        <h4 class="card-title">Mr. Tarque</h4>
                        <p>Experience of 1 months</p>
                        <a href="#">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="./img/meet3.jpg" />
                    <div class="card-body">
                        <h4 class="card-title">Mr. Boltu</h4>
                        <p>Experience of 5 months</p>
                        <a href="#">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="./img/meet4.jpg" />
                    <div class="card-body">
                        <h4 class="card-title">Mr. Mark</h4>
                        <p>Experience of 9 months</p>
                        <a href="#">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <figure>
        <div class="fixed-wrap">
            <div id="fixed"></div>
        </div>
    </figure>


    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>About Us</h2>
                <p>
                    Wheeler is such a website model-based concept in which drivers
                    and assets simplify can communicate with each other. In addition, a
                    driver can figure out his job in this website and also a user can
                    post job opportunities if he/she needs a driver. Our main goal from
                    this website is to make easy for drivers to get a job and also for a
                    client to get a driver for their own purpose. After creating an
                    account, a user can post a job circular, after getting he/she can
                    delete the post. And a driver can apply for getting a job. The main
                    responsibilities of drivers are to transport their clients to their
                    destination safe and comfort fashion.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="./img/location.JPG" class="img-fluid" />
            </div>
        </div>
    </div>
    <hr class="my-4" />





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