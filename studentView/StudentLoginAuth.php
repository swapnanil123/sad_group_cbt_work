<?php

include_once('db_connect.php');

$username = $_POST['username'];
$paperCode = $_POST['paperCode'];

$qrr = "select * from ongoingexam";

$que = mysqli_query($con, $qrr);
$res = mysqli_fetch_array($que);

$examCode = $res['exam_code'];


$q = "select * from studentlogindata where stdUserId = '".$username."' and exam_serial_no = '".$examCode."' ";

$query = mysqli_query($con, $q);
$resultt = mysqli_fetch_array($query);

$numberOfUser = mysqli_num_rows($query);

if ($numberOfUser > 0) {
    // $id = $result['id'];
    echo "success#".$username ."#".$resultt['std_roll'];

} else {    
    echo "No Data Found";
    // echo "You have entered wrong username and password";
}










$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$numberOfUser = mysqli_num_rows($query);

if ($numberOfUser > 0) {
    // $id = $result['id'];
    // echo "success#".$username ."#".$result['roll_number'];
    

} else {    
    echo "No Data Found";
    // echo "You have entered wrong username and password";
}


?>