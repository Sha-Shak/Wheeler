<?php

include('../connection/db.php');

$del = $_GET['job'];



$query = mysqli_query($conn, "delete from jobskeer where id ='$del'");

if ($query) {
    echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
    // header('location:drivers.php');
} else {
    echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
}
