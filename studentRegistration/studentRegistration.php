<?php 

include_once("db_connect.php");

$fullName = $_POST['name'];
$dept = $_POST['dept'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$sem = $_POST['sem'];
$session = $_POST['session'];


// $query = mysqli_query($con, $sql);

$q = "select exam_serial_no  from examcreatedetails where sem_name = '".$sem."' ";
$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);

$examCode = $result['exam_serial_no'];
// echo $examCode;



$sql = "INSERT INTO studentpersonalinfo (stdName, roll, dept, course, semester, sessionStd)
VALUES ('".$fullName."', '".$roll."', '".$dept."','".$course."','".$sem."','".$session."');";



$qrr = "INSERT INTO studentlogindata (`exam_serial_no`,`std_name`, `std_roll`) 
        VALUES ('".$examCode."','".$fullName."','".$roll."')";



if (mysqli_query($con, $sql)) {
  if (mysqli_query($con, $qrr)) {
    echo "successfully";
  } else {
    echo "Error";
  }
  
}else {
  echo "Error";
}




?>