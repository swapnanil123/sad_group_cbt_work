<?php

include_once('db_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];


$q = "select * from studentlogininfo where username = '".$username."' && password = '".$password."' ";

$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$numberOfUser = mysqli_num_rows($query);

if ($numberOfUser > 0) {
    // $id = $result['id'];
    echo "success#".$username ."#".$password."#".$result['roll_number'];
} else {
    echo "You have entered wrong username and password";
}


?>