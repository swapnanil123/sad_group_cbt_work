<?php 


include_once('db_connect.php');
session_start();

$user = $_POST['username'];
$pass = $_POST['pass'];


$q = "select * from userlogin where username = '".$user."' && userPassword = '".$pass."' ";

$query = mysqli_query($con, $q);
$result = mysqli_fetch_array($query);

$numberOfUser = mysqli_num_rows($query);

if ($numberOfUser > 0) {
    // $id = $result['id'];
    // echo "success#".$username ."#".$password."#".$result['roll_number'];
    echo "success";
} else {
    echo "error";
}

?>