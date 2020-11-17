<?php



$DBhost = "localhost";

$DBuser = "team15";

$DBpassword = "team15";

$DBname = "team15";



	$mysqli = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);



	if(mysqli_connect_error()){

	printf("Connection failed : %s\n", mysqli_connect_error());

	}

?>



