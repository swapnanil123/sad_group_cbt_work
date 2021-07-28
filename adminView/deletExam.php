<?php 

include_once("db_connect.php");

$code = $_POST['exam_code'];

$q = "DELETE FROM examcreatedetails WHERE exam_serial_no = '".$code."'";
$qrr = "DELETE FROM questiondetails WHERE exam_code = '".$code."'";

if (mysqli_query($con, $q)) {
    if(mysqli_query($con, $qrr)) {
        echo "successfully";
    }else {
        echo "error";
    }
}else {
    echo "error";
}



?>