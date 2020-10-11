<?php
session_start();

?>



<!DOCTYPE html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>


<body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="driverlogin.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>


                                <input type="submit" value="login" name="login">


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php
include('../connection/db.php');



if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = mysqli_query($conn, "select * from admin_login where email='$email' and password='$pass' ");

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

</html>