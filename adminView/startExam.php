<?php

include_once("db_connect.php");

$code = $_POST['examCode'];
$subName = $_POST['subjectNam'];
$semName = $_POST['semName'];
$paperCode = $_POST['paperCode'];
$duration = $_POST['duration'];
$totQtn = $_POST['totQtn'];



$sql = "INSERT INTO ongoingexam (`exam_code`,`subject_name`, `sem_name`, `paper_code`, `duration`, `tot_no_qtn`)
        VALUES ('".$code."', '".$subName."','".$semName."','".$paperCode."','".$duration."','".$totQtn."')";

// $query = mysqli_query($con, $sql);


if (mysqli_query($con, $sql)) {
  echo "successfully";
} else {
  echo "Error";
}


?>