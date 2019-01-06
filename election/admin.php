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

<h1 align=center>Sign In</h1>

<fieldset id="user_login">

<legend>Admin Login</legend>
<form method="POST" action="adminact.php">
<table id="user_table">
<tr>
<td>User Name</td>
<td><input type="text" name="username"  ></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="passwor" ></td>
</tr>
<tr>
<td><input type="submit" id="sbtn" value="Login"></td>
<td><input type="reset" id="rbtn" value="Clear"></td>
</tr>

</table>
</form>
</fieldset>
<center>
<?php
if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	echo "$msg";
}
?>
</center>
</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>