<?php 

include_once("db_connect.php");

$fullName = $_POST['name'];
$dept = $_POST['dept'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$sem = $_POST['sem'];
$session = $_POST['session'];

$sql = "INSERT INTO studentpersonalinfo (stdName, roll, dept, course, semester, sessionStd)
VALUES ('".$fullName."', '".$roll."', '".$dept."','".$course."','".$sem."','".$session."')";

// $query = mysqli_query($con, $sql);


if (mysqli_query($con, $sql)) {
  echo "successfully";
} else {
  echo "Error";
}




?>