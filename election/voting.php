<?php include "dbconfig.php";?>
<?php
    	session_start();
?>
<?php
    
		include('dbconfig.php');
		$txt1=$_POST['txt1'];
		$query="select * from voter where eid='$txt1'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)==0)
		{
			header("Location:index.php?msg=Invalid Login");
		}
		else
		{
			$row=mysqli_fetch_array($res);
			$_SESSION['eid']=$row['eid'];
?>
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
<center>
	<?php	
	
			echo "<br><br>";
			echo "<fieldset id='login'>";
			echo "<legend>Voting Session</legend>";
			echo "<form action='vote.php' method='post' id='frm'>";
			echo "<table id='newtable' border=1px cellspacing=1px>";
			echo "<tr><td>Name</td><td>party</td><td>symbol</td><td>Button</td></tr>";
			for($i=0;$i<10;$i++)
			{
				$query="select name,party,symbol from candidate_reg where sno=$i";
				$res=mysqli_query($con,$query);
				if(mysqli_num_rows($res)>0)
				{
					while($row=mysqli_fetch_array($res))
					{
						
					//	echo "<input type=radio name=ra value=$i />";	
						
						echo "<tr><td>".$row['name']."</td><td>".$row['party']."</td><td>".$row['symbol']."</td><td><input type=radio name=ra value=$i /></td></tr>";
					
						
					}
				}
			}
			echo "</table>";
			echo "<input type=submit name=na value=Vote id='rbtn' />";
			echo "</form>";
			echo "</fieldset>";
		}
	?>		
</center>
</div>
</div>
<div id="footer"> 
<?php include "footer.php";?>
</div>
</body>
</html>