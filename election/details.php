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
<div id="lftbx"> 
<?php include "marq.php";?>
</div>
<div id="rtbx"> 
<br><br><br><br><br><br><br><br><br><br>
<h1 align=center>CANDIDATE</h1><br>
<fieldset id="login">
<legend>Candidate Controls</legend>
<form action="candidatedetails.php" method="post">
<table id="newtable">
<tr>
<td><input type="submit" name="update" id="rbtn"value="Update Details"></td>
</tr>
</table>
</form>
<form action="canceldetails.php" method="post">
<table id="newtable">
<tr>
<td></td><td></td><td></td><td></td><td><input type="submit" name="cancel" id="rbtn"value="Cancel Details"></td>
</tr>
</table>
</form>
<form action="logout.php" method="post">
<table id="newtable">
<tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="log" id="rbtn"value="Logout"></td>
</tr>
</table>
</form>
 </fieldset>
</div>
</div>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>