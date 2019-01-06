<html>
<head>
<title>
Voters list
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
<?php
	include('dbconfig.php');
	$query="select * from voter";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)==0)
	{
		echo "<script>alert('No Entries');</script>";
	}
	else 
	{
		
		echo "<fieldset id='login'>";
		echo "<legend>Voters List</legend>";
		echo"<table id='newtable' border=1px cellspacing=0px>";
			echo "<tr>";
			echo "<th>sno</th>";
			echo "<th>Name</th>";
			echo "<th>Age</th>";
			echo "<th>DOB</th>";
			echo "<th>Relation Name</th>";
			echo "<th>Address</th>";
			echo "<th>Sex</th>";
			echo "<th>Voter Id</th>";
			echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<tr>";
			echo"<th>".$row['sno']."</th>";
			echo"<th>".$row['name']."</th>";
			echo"<th>".$row['age']."</th>";
			echo"<th>".$row['dob']."</th>";
			echo"<th>".$row['relation_name']."</th>";
			echo"<th>".$row['address']."</th>";
			echo"<th>".$row['sex']."</th>";
			echo"<th>".$row['eid']."</th>";
			echo"</tr>";
		}
		echo"</table>";
		echo"</fieldset>";
	}
?>
</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>

