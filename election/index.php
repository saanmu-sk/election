<?php include "dbconfig.php";?>
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
<br><br><br><br><br><br><br><br><br><br><br><br> 
<h1 align=center>Voter Login</h1><br>
<fieldset id="login">
<legend>Voter Login</legend>
	<form action='voting.php' method='post'>
	<table id="newtable">
		<tr><td>Enter Your ID</td><td><input type='text' name='txt1'  /></td></tr>
		<tr><td><input type='submit' name='submit' value='Vote Here' id="sbtn" /></td></tr>
	</table>
		</form>
		</fieldset>
		<center><br><br><br>
		<?php
if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	echo "$msg";
}
?>
</center>
</div>
</div>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>