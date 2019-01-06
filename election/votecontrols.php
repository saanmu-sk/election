 
<html>
<head>
<title>
voters
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
<fieldset id="user_login">
<legend>voter controls</legend>
<form action="" method='post'>
<table id="user_table" method="post">
<tr>
<td>Remove The Voter<br>(Please Enter The Voter Id)</td>
<td><input type="text" name="vrem"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="vsearch.php" method='post'>
<table id="user_table" method="post">
<tr>
<td>Search The Voter<br>(Please Enter The Voter Id)</td>
<td><input type="text" name="vsea"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="vdisplay.php" method='post'>
<table id="user_table" method="post">
<tr>
<td><input type="submit" name="vds" id="rbtn"value="Voter List"></td>
</tr>
</table>
</form>
</fieldset>
</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>
<?php
	if(isset($_POST['ok']))
	{
		include ('dbconfig.php');
		$id=$_POST['vrem'];
		$query="delete from voter where eid='$id'";
		$rs=mysqli_query($con,$query);
		if(!mysqli_affected_rows($con))
			echo mysqli_error($con);
		else
			echo "<script>alert('Canceled Succesfully');</script>";
	
	}
?>