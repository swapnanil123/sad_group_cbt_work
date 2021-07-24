<?php 

include_once("db_connect.php");

$subject = $_POST['subject'];
$paperName = $_POST['paperName'];
$paperCode = $_POST['paperCode'];
$totalQtn = $_POST['totNoQtn'];
$duration = $_POST['duration'];


$sql = "INSERT INTO examcreatedetails (`subject_name`, `paper_name`, `paper_code`, `number_of_question`, `exam_duration`)
        VALUES ('".$subject."','".$paperName."','".$paperCode."','".$totalQtn."','".$duration."')";

// $query = mysqli_query($con, $sql);


if (mysqli_query($con, $sql)) {
  echo "successfully";
} else {
  echo "Error";
}



?>