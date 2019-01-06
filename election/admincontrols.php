
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
<form action="#" method="post">
<table id="user_table">
<tr>
<td>Remove The Candidate<br>(Please Enter The Symbol)</td>
<td><input type="text" name="rem"></td>
<td><input type="submit" id="sbtn"name="ok" value="ok"></td>
</tr>
</table>
</form>

<form action="search.php" method="post">
<table id="user_table">
<tr>
<td>Search The Candidate<br>(Please Enter The Symbol)</td>
<td><input type="text" name="sea"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="#" method="post">
<table id="user_table">
<tr>
<td><input type="submit" name="ids" id="rbtn"value="Candidate List"></td>
</tr>
</table>
</form>
</fieldset>
<fieldset id="user_login">
<legend>voter controls</legend>
<form action="#">
<table id="user_table" method="post">
<tr>
<td>Remove The Voter<br>(Please Enter The Voter Id)</td>
<td><input type="text" name="vrem"></td>
<td><input type="submit" id="sbtn"name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="#">
<table id="user_table" method="post">
<tr>
<td>Search The Voter<br>(Please Enter The Voter Id)</td>
<td><input type="text" name="vsea"></td>
<td><input type="submit" id="sbtn" name="ok" value="ok"></td>
</tr>
</table>
</form>
<form action="#">
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