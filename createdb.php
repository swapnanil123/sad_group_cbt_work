<?php


if (isset($_POST['create'])) {
	
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$userid = validate($_POST['userid']);
	$pass = validate($_POST['pass']);

	$user_data = 'userid='.$userid. '&pass='.$pass;

	if (empty($userid)) {
		header("Location : create.php?error=user id required&$user_data");
	}elseif (empty($pass)) {
		header("Location : create.php?error=password required&$user_data");
	}else{
		echo "Fine";
	}
}