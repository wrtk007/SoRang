<?php
    ini_set('display_errors','0');
	include "../config.php";
	include "password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	//$adress = $_POST['adress'];
	//$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];
	$hash1 = $_POST['hash1'];
	$hash2 = $_POST['hash2'];
	$hash3 = $_POST['hash3'];

	$sql = mq("INSERT into user_info (id, password, name, email, taste_hash1, taste_hash2, taste_hash3) values('".$userid."','".$userpw."','".$username."','".$email."','".$hash1."','".$hash2."','".$hash3."')");

	if ($sql) {
		echo '
			<script type="text/javascript">alert("Sign up success.");</script>	
		';
	} else {
		echo '
			<script type="text/javascript">alert("Sign up failed.");</script>	
		';
	}

?>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="0 url=/">

