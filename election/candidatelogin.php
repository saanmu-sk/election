<?php
	session_start();
	if(isset($_POST['sub']))
	{
		include ('dbconfig.php');
		$txt1=$_POST['name'];
		$txt2=$_POST['password'];
		$query="select * from candipass where name='$txt1' AND password='$txt2'"; 
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)==0)
		{
			header("Location:candidatelogin.php?msg=Invalid Login");
		}
		else
		{
			$row=mysqli_fetch_array($res);
			$_SESSION['sno']=$row['sno'];
			header("Location:details.php");
		}
	}
?>
<html>
<head>
<title>
Candidate Login
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

<legend>Candidate Login</legend>
<form method="POST" action="">
<table id="user_table">
<tr>
<td>Name</td>
<td><input type="text" name="name"  ></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" ></td>
</tr>
<tr>
<td><input type="submit" id="sbtn" name='sub' value="Login"></td>
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