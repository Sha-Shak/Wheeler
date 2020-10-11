<?php

include('../connection/db.php');
$job = $_GET['edit'];
$query = mysqli_query($conn, "select * from all_jobs where job_id= '$job' ");
// var_dump($query);

while ($row = mysqli_fetch_array($query))
    $job_id = $row['job_id'];
$c_email = $row['customer_email'];



$quer = mysqli_query($conn, "insert into apply(job_id, email) values('$job_id','$c_email')");

if (($quer)) {
    echo "Applied successfully!";
} else {
    echo "some error please try again !";
}
