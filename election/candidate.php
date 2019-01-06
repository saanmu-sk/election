<?php include "dbconfig.php";?>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$dob=$_POST['dob'];
		$sex=$_POST['sex'];
		$party=$_POST['party'];
		$symbol=$_POST['symbol'];
		$address=$_POST['address'];
		$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$pass=substr(str_shuffle($chars),0,8);
		$query="insert into candidate_reg values('','$name','$age','$dob','$sex','$party','$symbol','$address')";
		$rs=mysqli_query($con,$query);
		if(!$rs)
		{
			echo mysqli_error($con);
		}
		else
		{
			//echo "inserted successfully";
			$query1="insert into candipass values('','$name','$pass','$symbol');";
			$r=mysqli_query($con,$query1);
			if(!$r)
			{
				echo mysqli_error($con);
			}
			else
			{
		
				$query2="insert into candidate_details values('','$party','','$symbol','','','','');";
				$r1=mysqli_query($con,$query2);
				if(!$r1)
				{
					echo mysqli_error($con);
				}
				else
				{
					header("Location:candidatelogin.php?msg=Your Password Is : $pass");
					echo "your password is ".$pass;
				}
			}
		}
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

<h1 align=center>New Candidate Registration</h1>
<fieldset id="user_login">
<legend>New Candidate </legend>
<form method="post" action="" autocomplete="off">
<table id="user_table">
<tr>
<td>Name</td>
<td><input type="text" name="name" ></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" ></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td><input type="date" name="dob" ></td>
</tr>
<tr>
<td>Sex</td>
<td>
<select name="sex">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</td>
</tr>
<tr>
<td>Party Name</td>
<td><input type="text" name="party" ></td>
</tr>
<tr>
<td>Symbol</td>
<td><input type="text" name="symbol" ></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" ></td>
</tr>
<tr>
<td><input type="submit" id="sbtn" value="Save" name="submit" ></td>
<td><input type="reset" id="rbtn" value="Clear" name="reset"></td>
</tr>
</table>
</form>
</fieldset>
<?php
				
?>
</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>
