<?php

	$con = mysqli_connect('localhost','root','Aditya123','sms');

	if($con == false){
		echo "Connection not successful";
	}
	
	mysqli_set_charset($con,"utf8");
?>
