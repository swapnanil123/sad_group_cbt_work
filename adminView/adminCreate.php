<?php 

include_once("db_connect.php");

$fullName = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO userlogin (fullName, username, userPassword, userEmail)
VALUES ('".$fullName."', '".$username."', '".$pass."','".$email."')";

// $query = mysqli_query($con, $sql);


if (mysqli_query($con, $sql)) {
  echo "successfully";
} else {
  echo "Error";
}




?>