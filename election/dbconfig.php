<?php
	$url="localhost";
	$dbusername="root";
	$dbpassword="";
	$db="onelect";
	$con=mysqli_connect($url,$dbusername,$dbpassword,$db);
	if(!$con)
	{
		echo "not connected";
	}
?>
