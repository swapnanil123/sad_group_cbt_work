<?php 

include_once("db_connect.php");

$code = $_POST['exam_code'];

$q = "DELETE FROM examcreatedetails WHERE exam_serial_no = '".$code."'";

if (mysqli_query($con, $q)) {
    echo "successfully";
} else {
    echo "error";
}



?>