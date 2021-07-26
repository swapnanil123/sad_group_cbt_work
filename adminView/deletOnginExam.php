<?php 

include_once("db_connect.php");

$code = $_POST['exam_code'];

$q = "DELETE FROM ongoingexam WHERE exam_code = '".$code."'";

if (mysqli_query($con, $q)) {
    echo "successfully";
} else {
    echo "error";
}



?>