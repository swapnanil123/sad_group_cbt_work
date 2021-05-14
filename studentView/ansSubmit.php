<?php 

include_once("db_connect.php");

$id =  $_POST['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$roll = $_POST['roll'];
$stdName = $_POST['stdName'];
$stdDept = $_POST['dpet'];

date_default_timezone_set('Asia/Kolkata');
// $current_date = date("Y-m-d H:i:s");
$currentTime = date( 'd-m-Y h:i:s A', time () );

$q = "select * from questions where id = '".$id."' ";
$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$currentAnswe = $result['answer'];

$pushDB = "INSERT INTO  submittedqtnans (stdRoll, stdName, stdDept, questionName, stdGivenAns, currectAns, submitTime) VALUES ('".$roll."', '".$stdName."', '".$stdDept."', '".$question."', '".$answer."', '".$currentAnswe."', '".$currentTime."')";

$que = mysqli_query($con, $pushDB);

echo "success";


?>