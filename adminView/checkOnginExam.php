<?php

include_once("db_connect.php");

$code = $_POST['code'];
// echo $code;

$q = "select * from ongoingexam where exam_code = '".$code."' ";

$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$numberOfUser = mysqli_num_rows($query);

if ($numberOfUser > 0) {
    echo json_encode($result['exam_code']);

} else {
    echo "error";
}
        
?>
