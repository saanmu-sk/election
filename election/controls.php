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
<br><br><br><br><br><br><br><br><br><br>
<h1 align=center>ADMIN </h1><br>
<fieldset id="login">
<legend>Admin Controls</legend>
<form action="cancontrols.php" method="post">
<table id="newtable">
<tr>
<td><input type="submit" name="cdis" id="rbtn"value="Candidate Controls"></td>
</tr>
</table>
</form>
<form action="votecontrols.php" method="post">
<table id="newtable">
<tr>
<td></td><td></td><td></td><td></td><td><input type="submit" name="vdis" id="rbtn"value="Voter Controls"></td>
</tr>
</table>
</form>
<form action="result.php" method="post">
<table id="newtable">
<tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="res" id="rbtn"value="Result"></td>
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