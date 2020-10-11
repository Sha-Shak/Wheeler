<?php
session_start();
include('../connection/db.php');

$login = $_SESSION['email'];

$JOb_title = $_POST['job_title'];
$Description = $_POST['Description'];
$country = $_POST['country'];




$query = mysqli_query($conn, "insert into  all_jobs(customer_email,job_title,des,country)values('$login','$JOb_title','$Description','$country')");

// var_dump($query);
if ($query) {
  echo "Data has been successfully Inserted !";
} else {
  echo "some error please try again !";
}
