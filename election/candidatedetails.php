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
Candidate
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="header"> 
<?php include "header.php";?>
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
<h1 align=center>Update Details</h1><br>
<fieldset id="user_login">
<legend>Update Candidate Details</legend>
<form method="post" action="" autocomplete="off">
<table id="user_table">
<tr>
<td>Position</td>
<td>
<select name="position">
<option value="COUNSILER">MINISTER</option>
</select>
</td>
</tr>

<tr>
<td>Time Span</td>
<td><input type="text" name="timespan" ></td>
</tr>
<tr>
<td>Times</td>
<td><input type="text" name="times" ></td>
</tr>
<tr>
<td>Region</td>
<td><input type="text" name="region" ></td>
</tr>
<tr>
<td>Achivements</td>
<td><input type="text" name="achivements" ></td>
</tr>
<tr>
<td><input type="submit" id="sbtn" value="Save" name="submit" ></td>
<td><input type="reset" id="rbtn" value="Clear" name="reset"></td><br>
</tr>
<tr><td><a href=logout.php>Logout</a></td></tr>
</table>
</form>
</fieldset>
<?php
	if(isset($_POST['submit']))
	{
		
		$position=$_POST['position'];
		$timespan=$_POST['timespan'];
		$times=$_POST['times'];
		$region=$_POST['region'];
		$achivement=$_POST['achivements'];
		include ('dbconfig.php');
		$query="update candidate_details set position='$position',timespan='$timespan',times='$times',timespan='$timespan',times='$times',region='$region',achivement='$achivement' where sno=$_SESSION[sno]";
		$rs=mysqli_query($con,$query);
		if(!mysqli_affected_rows($con))
			echo mysqli_error($con);
		else
			echo "<script>alert('Updated Succesfully');</script>";
	}
?>
</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>

