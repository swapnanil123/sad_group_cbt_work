<?php

include_once('db_connect.php');

$stdID = $_POST['stdroll'];

$q = "select * from studentpersonalinfo where roll = '".$stdID."' ";

$query = mysqli_query($con, $q);

$result = mysqli_fetch_row($query);
// $numOfInfo = mysqli_num_rows($query);

// echo json_encode($result);

$qrr = "select * from studentlogindata where std_roll = '".$stdID."' ";
$sql = mysqli_query($con, $qrr);
$res = mysqli_fetch_row($sql);

$examCode = $res[1];

$re =  "select * from examcreatedetails where exam_serial_no = '".$examCode."' ";
$te = mysqli_query($con, $re);
$ree = mysqli_fetch_array($te);

$exam_Time = $ree['exam_duration'];

$stdInfo = array(
    "id" => $result[0],
    "name" => $result[1],
    "roll" => $result[2],
    "dept" => $result[3],
    "course" => $result[4],
    "sem" => $result[5],
    "session" => $result[6],
    "exam_code" => $res[1],
    "exam_time" => $exam_Time,
);

echo json_encode($stdInfo);
// echo $result['name'];

?>