<?php
session_start();
session_unset();


include('../connection/db.php');

$query = mysqli_query($conn, "select * from admin_login where admin_email='{$_SESSION['email']}' ");
if ($query) {
	header('location:http://localhost:8080/jp/admin');
} else {
	header('location:adminlogin.php');
}
