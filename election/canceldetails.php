<?php 
	session_start();
	include "dbconfig.php";
	if(!isset($_SESSION['sno']))
	{
		header("Location:candidatelogin.php?msg=Login Please");
	}		
?>
<html>
<head>
<title>
Home
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header"> 
<?php include "header.php";?>
</div>
</div>
<div id="nav">
<center>
<ul id="navul">
<li><a href="index.php">Home</a></li>
<li><a href="admin.php">Admin Login</a></li>
<li><a href="candidate.php">candidate Registration</a></li>
<li><a href="candidatelogin.php">Candidate Login</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>
</center>
</div>
<div id="container"> 
<h1 align=center>Cancel Details</h1><br>
<fieldset id="user_login">
<legend>Cancel Candidate Details</legend>
	<form action='' method='post'>
	<table id="user_table">
		<tr><td>Enter Password</td><td><input type='Password' name='pass' /></td></tr>
		<tr><td><input type='submit' name='sub' value='Cancel' id="rbtn"/></td></tr>
		<tr><td><a href=logout.php>Logout</a></td></tr>
	</table>
	</form>
</fieldset>
</div>
<?php
	if(isset($_POST['sub']))
	{
		include ('dbconfig.php');
		$pass=$_POST['pass'];
		$query5="select * from candipass where password='$pass'"; 
		$res5=mysqli_query($con,$query5);
		if(mysqli_num_rows($res5)==0)
		{
			header("Location:candidatelogin.php?msg=Invalid Login");
		}
		else
		{
			$query="delete from candipass where sno=$_SESSION[sno]";
			$rs=mysqli_query($con,$query);
			$query1="delete from candidate_reg where sno=$_SESSION[sno]";
			$rs1=mysqli_query($con,$query1);
			$query2="delete from candidate_details where sno=$_SESSION[sno]";
			$rs2=mysqli_query($con,$query2);
			if(!mysqli_affected_rows($con))
				echo mysqli_error($con);
			else
				echo "<script>alert('Canceled Succesfully');</script>";
		}
	}
?>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>
