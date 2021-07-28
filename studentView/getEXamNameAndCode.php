<?php

include_once('db_connect.php');

$q = "select * from ongoingexam";
$query = mysqli_query($con, $q);
$totalData = mysqli_num_rows($query);

$result = mysqli_fetch_array($query);

echo "success#".$result['subject_name']."#".$result['paper_code'];


?>