<html>
<head>
<title>
contact us 
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

<h1 align=center>Get In Touch</h1>

<fieldset id="user_login">

<legend>Contact us</legend>
<form method="POST" action="email.php">
<table id="user_table">
<tr>
<td>Name</td>
<td><input type="text" name="name"  ></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" ></td>
</tr>
<tr>
<td>Message</td>
<td><input type="text" name="msg"></td>
</tr>
<tr>
<td><input type="submit" id="sbtn" value="Send"></td>
</tr>
</table>
</form>
</fieldset>
<img src="contact.png" id="cimg">
</div>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>