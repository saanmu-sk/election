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
<?php
	include('dbconfig.php');
	$k=0;
	echo "<fieldset id='user_login'>";
	echo "<legend>Individual Count</legend>";
	for($i=0;$i<10;$i++)
	{
		$query="select count(voter) from people where voter=$i"; 
		$res=mysqli_query($con,$query);
		$row=mysqli_fetch_array($res);
		$array=$row[0];
		if($array>0)
		{
			$query1="select name from candidate_reg where sno=$i";
			$res1=mysqli_query($con,$query1);
			
			echo "<table id='user_table'>";
			if(mysqli_num_rows($res1)==1)
			{	
				echo "<tr>";
				while($row1=mysqli_fetch_array($res1))
				{	
					echo "<td>".$row1['name']."</td><td>".$array."</td>";
					if($array>$k)
					{
						$k=$array;
						$h=$row1['name'];
					}
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	echo "</fieldset>";
	echo "<center>The Winner Is ".$h."  <br>Total Vote Is ".$k."</center>";
?>
</div>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>
