<?php

include_once("db_connect.php");

$code = $_POST['examCode'];
$subName = $_POST['subjectNam'];
$paperName = $_POST['paperName'];
$paperCode = $_POST['paperCode'];
$duration = $_POST['duration'];
$totQtn = $_POST['totQtn'];


$sql = "INSERT INTO ongoingexam (`exam_code`, `subject_name`, `paper_name`, `paper_code`, `duration`, `tot_no_qtn`)
        VALUES ('".$code."','".$subName."','".$paperName."','".$paperCode."','".$duration."','".$totQtn."')";

// $query = mysqli_query($con, $sql);


if (mysqli_query($con, $sql)) {
  echo "successfully";
} else {
  echo "Error";
}


?>