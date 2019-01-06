<html>
<head>
<title>
candidate list
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
	$query="select * from candidate_details";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)==0)
	{
		echo "<script>alert('No Entries');</script>";
	}
	else 
	{	
		echo "<h1 align=center>Full Candidate List</h1>";
		echo "<fieldset id='login'>";
		echo "<legend>Candidate List</legend>";
		echo"<table id='newtable' border=1px cellspacing=5px>";
		echo "<tr>";
			echo "<th>sno</th>";
			echo "<th>Party</th>";
			echo "<th>Position</th>";
			echo "<th>Symbol</th>";
			echo "<th>Timespan</th>";
			echo "<th>Times</th>";
			echo "<th>Region</th>";
			echo "<th>Achievement</th>";
			echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<th>sno</th>";
			echo "<th>Party</th>";
			echo "<th>Position</th>";
			echo "<th>Symbol</th>";
			echo "<th>Timespan</th>";
			echo "<th>Times</th>";
			echo "<th>Region</th>";
			echo "<th>Achievement</th>";
			echo "</tr>";
			echo"<tr>";
			echo"<th>".$row['sno']."</th>";
			echo"<th>".$row['party']."</th>";
			echo"<th>".$row['position']."</th>";
			echo"<th>".$row['symbol']."</th>";
			echo"<th>".$row['timespan']."</th>";
			echo"<th>".$row['times']."</th>";
			echo"<th>".$row['region']."</th>";
			echo"<th>".$row['achivement']."</th>";
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
