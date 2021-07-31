<?php 

include_once("db_connect.php");

$subject = $_POST['subject'];
$course = $_POST['course'];
$semName = $_POST['semName'];
$paperCode = $_POST['paperCode'];
$totalQtn = $_POST['totNoQtn'];
$duration = $_POST['duration'];

$q = "SELECT * FROM examcreatedetails WHERE subject_name = '".$subject."' and sem_name = '".$semName."' and course = '".$course."' ";
$query = mysqli_query($con, $q);
$totaldata = mysqli_num_rows($query);

if ($totaldata < 1) {

  $sql = "INSERT INTO examcreatedetails (`subject_name`, `sem_name`, `paper_code`, `course`, `number_of_question`, `exam_duration`)
        VALUES ('".$subject."','".$semName."','".$paperCode."', '".$course."', '".$totalQtn."','".$duration."')";

// $query = mysqli_query($con, $sql);


  if (mysqli_query($con, $sql)) {
    echo "successfully";
  } else {
    echo "Error";
  }


}else {
  echo "DataFound";
}






?>