<?php 

include_once("db_connect.php");

$id =  $_POST['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$roll = $_POST['roll'];
$stdName = $_POST['stdName'];
$stdDept = $_POST['subject'];
$examCode = $_POST['exam_code'];

date_default_timezone_set('Asia/Kolkata');
// $current_date = date("Y-m-d H:i:s");
$currentTime = date( 'd-m-Y h:i:s A', time () );

$q = "select * from questiondetails where id = '".$id."' ";
$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$currentAnswe = $result['answer'];

$pushDB = "INSERT INTO `examanswer`(`exam_code`, `stdName`, `stdRoll`, `subject_name`, `question`, `stdGivenAnswer`, `currectAnswer`, `submitionTime`) 
VALUES ('".$examCode."', '".$stdName."', '".$roll."', '".$stdDept."','".$question."','".$answer."','".$currentAnswe."','".$currentTime."')";

$que = mysqli_query($con, $pushDB);

echo "success";


?>