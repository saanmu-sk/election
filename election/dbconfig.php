<?php
	$url="localhost";
	$dbusername="id4058845_election";
	$dbpassword="online";
	$db="id4058845_onelect";
	$con=mysqli_connect($url,$dbusername,$dbpassword,$db);
	if(!$con)
	{
		echo "not connected";
	}
?>
