
<html>
<head>
<title>
Admin 
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
<legend>candidate controls</legend>
<form action="" method="post">
<table id="user_table">
<tr>
<td>Remove The Candidate<br>(Please Enter The Symbol)</td>
<td><input type="text" name="rem"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>

<form action="search.php" method="post">
<table id="user_table">
<tr>
<td>Search The Candidate(Please Enter The Symbol)</td>
<td><input type="text" name="sea"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="cdisplay.php" method="post">
<table id="user_table">
<tr>
<td><input type="submit" name="ids" id="rbtn"value="Candidate List"></td>
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
		$sym=$_POST['rem'];
		$query="delete from candipass where symbol='$sym'";
		$rs=mysqli_query($con,$query);
		$query1="delete from candidate_reg where symbol='$sym'";
		$rs1=mysqli_query($con,$query1);
		$query2="delete from candidate_details where symbol='$sym'";
		$rs2=mysqli_query($con,$query2);
		if(!mysqli_affected_rows($con))
			echo mysqli_error($con);
		else
			echo "<script>alert('Canceled Succesfully');</script>";
		
	}
?>