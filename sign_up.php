<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Sign up</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">


  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="sign_up.php" method="post">
    <h1>Wheeler</h1>
    <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>

    <label for="first_name" class="sr-only">First Name</label>
    <input type="first_name" id="first_name" class="form-control" name="first_name" placeholder="Enter Your First name" required autofocus>

    <label for="last_name" class="sr-only">Last Name</label>
    <input type="last_name" id="last_name" class="form-control" name="last_name" placeholder="Enter Your Last Name" required autofocus>

    <label for="mobile_number" class="sr-only">Mobile Number</label>
    <input type="Number" id="mobile_number" class="form-control" name="mobile_number" placeholder="Enter Your Mobile Number" required autofocus>

    <label for="dob" class="sr-only">Date Of Birth</label>
    <input type="date" id="dob" class="form-control" name="dob" placeholder="Enter Your Date Of Birth" required autofocus>



    <input type="submit" name="submit" value="sign Up">

  </form>
</body>

</html>
<?php
include('../connection/db.php');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $Password = $_POST['Password'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $dob = $_POST['dob'];
  $mobile_number = $_POST['mobile_number'];


  $query = mysqli_query($conn, "insert into jobskeer(email,password,first_name,last_name,dob,mobile_number)values('$email','$Password','$first_name','$last_name','$dob','$mobile_number')");
  #var_dump($query);
  if ($query) {
    echo "<script>alert('Now You Can Login!')</script>";
    header('location:new-post.php');
  } else {
    echo "<script>alert('Some Error Please Try Again!')</script>";
  }
}



?>