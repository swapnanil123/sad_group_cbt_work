<?php

include_once("db_connect.php");

$subjectName = $_POST['subName'];
$semName = $_POST['semName'];
$paperCode = $_POST['paperCode'];
$qtn = $_POST['qtn'];
$opt_one = $_POST['op_one'];
$opt_two = $_POST['op_two'];
$opt_three = $_POST['op_three'];
$opt_four = $_POST['op_four'];
$qtn_ans = $_POST['qtnn_ans'];

// echo $paperCode;

$sql = "select exam_serial_no from examcreatedetails where paper_code = '".$paperCode."' and subject_name = '".$subjectName."' ";

$query = mysqli_query($con, $sql);
$allQuestions = mysqli_num_rows($query);

$result = mysqli_fetch_array($query);

$examCode = $result['exam_serial_no'];

$q = "INSERT INTO questiondetails (`exam_code`, `subject_name`, `sem_name`, `paper_code`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`)
    VALUES ('".$examCode."','".$subjectName."','".$semName."','".$paperCode."','".$qtn."','".$opt_one."','".$opt_two."','".$opt_three."','".$opt_four."','".$qtn_ans."')";

if(mysqli_query($con, $q)) {
    echo "Success";
} else {
    echo "error";
}



?>