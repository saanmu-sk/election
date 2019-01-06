<html>
<head>
<title>
search list
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
include("dbconfig.php");
$s=$_POST['vsea'];
	

		$query="select * from voter where eid='$s'";
		$res=mysqli_query($con,$query);
		$rs=mysqli_affected_rows($con);
		if(!$rs)
		{
				echo "not found";
		}
		else
		{
		//echo "display sucess";
		}
		echo "<h1 align=center>Search List</h1>";
		echo "<fieldset id='login'>";
		echo "<legend>Candidate List</legend>";
		echo"<table id='newtable' border=1px cellspacing=5px>";	
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
			echo "</table>";
			echo"</fieldset>";
	

mysqli_close($con);

?>

</div>

<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>
