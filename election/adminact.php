<?php 
	include "dbconfig.php";
	$name=$_POST["username"];
	$pass=$_POST["passwor"];
	$pass=md5($pass);
	$query="select * from admin where name='$name' and password='$pass'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)==1)
	{
		include"controls.php";
	}
	else
	{
		echo "<script>alert('Invalid Login');</script>";
		header("Location:admin.php?msg=Invalid Login");
	}

?>