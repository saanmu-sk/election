<?php include "dbconfig.php";?>
<?php
	$name=$_POST['name'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$sex=$_POST['sex'];
	$party=$_POST['party'];
	$symbol=$_POST['symbol'];
	$address=$_POST['address'];
	$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$pass=substr(str_shuffle($chars),0,8);
	$query="insert into candidate_reg values('$name','$age','$dob','$sex','$party','$symbol','$address');";
	$rs=mysqli_query($con,$query);
	if(!$rs)
	{
		echo mysqli_error($con);
	}
	else
	{
		//echo "inserted successfully";
		$query1="insert into candipass values('','$name','$pass');";
		$r=mysqli_query($con,$query1);
		echo "your password is ".$pass;
		
	}
?>