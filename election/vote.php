<?php
	session_start();
	include('dbconfig.php');
	$txt2=$_POST['ra'];
	$query="insert into people values('$_SESSION[eid]','$txt2')";
	$res=mysqli_query($con,$query);
	if(!$res)
	{
		echo mysqli_error($con);
	}
	else
	{
		$query1="delete from voter where eid='$_SESSION[eid]'";
		$res1=mysqli_query($con,$query1);
		header("Location:index.php?msg=Thank You For Voting");
	}
	session_destroy();	
?>