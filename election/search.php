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
$s=$_POST['sea'];
	

		$query="select * from candidate_details where symbol='$s'";
		$res=mysqli_query($con,$query);
		$rs=mysqli_affected_rows($con);
		if(!$rs)
		{
				echo "update failed";
		}
		else
		{
	//	echo "display sucess";
		}
		echo "<h1 align=center>Search List</h1>";
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
				echo "<td>".$row['sno']."</td>";
				echo "<td>".$row['party']."</td>";
				echo "<td>".$row['position']."</td>";
				echo "<td>".$row['symbol']."</td>";
				echo "<td>".$row['timespan']."</td>";
				echo "<td>".$row['times']."</td>";
				echo "<td>".$row['region']."</td>";
				echo "<td>".$row['achivement']."</td>";
				echo "</tr>";

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